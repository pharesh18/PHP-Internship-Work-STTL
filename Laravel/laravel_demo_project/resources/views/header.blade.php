<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <h1>Header Page</h1>
    {{-- @foreach ($fruits as $fruit)
        <p>{{$fruit}}</p>
    @endforeach --}}

    @forelse ($fruits as $fruit)  {{-- @empty will run if array is empty --}}
        <p>{{$fruit}}</p>
    @empty
        <p>Data not found</p>
    @endforelse
    <hr>
</body>

</html>