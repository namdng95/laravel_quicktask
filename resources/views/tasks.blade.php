@extends('layouts.app')
@section('title', trans('user.title'))
@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">@lang('user.task.name')</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> @lang('user.task.create')
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->

    <button><a href="{{ route('tasks.index') }}">@lang('user.task.show')</a></button>

@endsection
