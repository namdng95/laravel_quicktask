@extends('layouts.app')
@section('title', trans('user.title'))
@section('content')
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    <button><a href="{{ route('tasks.create') }}">@lang('user.task.create')</a></button>
    @if (count($tasks) > 0)
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('user.task.header')
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>@lang('user.task.name')</th>
                            <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        <form action="{{ route('tasks.destroy', [$task->id]) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> @lang('user.action.delete')
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif 
@endsection
