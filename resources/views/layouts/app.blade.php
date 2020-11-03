<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('title')</title>

    <!-- CSS And JavaScript -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1>@lang('message.welcome')</h1>
        <p>
            <a href="{!! route('user.change-language', ['vi']) !!}" class="text-dark">@lang('user.language.lang_vi')</a>
            <a href="{!! route('user.change-language', ['en']) !!}" class="text-dark">@lang('user.language.lang_en')</a>
        </p>
    </header>
    <div class="container">
        <nav class="navbar navbar-default">

            <!-- Navbar Contents -->
            
        </nav>
    </div>

    @yield('content')

    <footer>

        <!-- Footer Contents -->

    </footer>
</body>

</html>