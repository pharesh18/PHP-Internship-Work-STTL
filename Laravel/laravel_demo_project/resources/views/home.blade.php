@php
    $fruits = array("Apple", "Banana", "Orange", "Mango", "Watermelon");
    $showFooter = false;
@endphp

@include('header', ['fruits' => $fruits])  {{-- use 'component/header or component.header if it is in any folder', also passing data as a parameter --}} 
@includeIf('content')   {{--  IncludeIf will got produde an error if file not found --}} 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
</body>
</html>

{{-- @include('footer')   use 'component/footer or component.footer if it is in any folder' --}}

{{-- it allows us to show the page on condition base --}}
@includeWhen($showFooter, 'footer') 
