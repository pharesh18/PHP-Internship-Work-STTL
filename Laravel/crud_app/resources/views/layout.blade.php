<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <script src="js\bootstrap.bundle.min.js"></script>
    <title>Layout</title>
</head>

<body>
    <div class="window d-flex flex-column min-vh-100">
        @include('components.header')
        <div class="main flex-grow-1 py-5">
            @yield('main-content')
        </div>
        @include('components.footer')
    </div>
</body>

</html>
