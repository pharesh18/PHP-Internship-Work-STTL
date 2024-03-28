<h1>Users data </h1>

@foreach ($users as $key => $val)
    <h2>{{$val["name"]}} | {{$val["age"]}} | {{$val["gender"]}} | <a href="/user/{{$key}}">Show</a></h2>
@endforeach