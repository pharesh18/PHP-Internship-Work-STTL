<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <title>@yield('title', 'Website')</title>
    {{-- @stack('cssFile') --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .layout {
            height: 100vh;
        }

        .main {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="layout">
        @include('demo.header')
        @include('demo.menubar')
        <div class="main"
            style="display: flex; align-items: start; justify-content: space-between; background-color:antiquewhite;">
            @include('demo.sidebar')
            @hasSection('mainContent')
                @yield('mainContent')
            @else
                <h2>No Content Found</h2>
            @endif
        </div>
        @include('demo.footer')
    </div>
</body>
{{-- @stack('jsFile') --}}

</html>
