<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
</head>

<body>
    <div class="layout">
        <div class="main-header">
            <h1>Header</h1>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
        <div class="main-footer">
            <h1>Footer</h1>
        </div>
    </div>
</body>

</html>
