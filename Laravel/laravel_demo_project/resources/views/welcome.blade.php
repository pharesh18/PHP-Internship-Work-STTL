<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    {!! "<h1>Welcome Page</h1>" !!}
    {{"Welcome Page"}}
    {!! "<hr>" !!}

    @php
        $fruits = array("Apple", "Banana", "Orange", "Mango", "Watermelon");
    @endphp

    {!! "<h2>Fruits</h2>" !!}
    {!! "<ol>" !!}
    @foreach ($fruits as $fruit)
        {!! "<li>" . $fruit . "</li>" !!}
    @endforeach
    {!! "</ol><hr>" !!}

    <ul>
        @foreach ($fruits as $fruit)
            @if ($loop->first)
                <li style="color: red";>{{$fruit}} - Index : {{$loop->index}} - Iteration : {{$loop->iteration}} - Remaining : {{$loop->remaining}} </li>
            @elseif($loop->odd)
                <li style="color: green;">{{$fruit}}  - Index : {{$loop->index}} - Iteration : {{$loop->iteration}} - Remaining : {{$loop->remaining}} </li>
            @elseif($loop->even)
                <li style="color: gray;">{{$fruit}}  - Index : {{$loop->index}} - Iteration : {{$loop->iteration}} - Remaining : {{$loop->remaining}} </li>
            @endif
        @endforeach
    </ul>
    <hr>
</body>
</html>