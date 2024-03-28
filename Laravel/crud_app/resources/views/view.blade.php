@extends('layout')

@section('main-content')
    <div class="content container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="m-0">Player List</h2>
            <a href="{{ route('player.form') }}"><button class="btn text-white" style="background-color: #ee9f27">Add
                    Player</button></a>
        </div>
        <table class="table table-striped border">
            <thead class="">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">MiddleName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Age Group</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Sports Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <td>{{ $player->id }}</td>
                        <td>{{ $player->firstName }}</td>
                        <td>{{ $player->middleName }}</td>
                        <td>{{ $player->lastName }}</td>
                        <td>{{ $player->ageGroup }}</td>
                        <td>{{ $player->gender }}</td>
                        <td>{{ $player->dob }}</td>
                        <td>{{ $player->sportsName }}</td>
                        <td>{{ $player->mobileNumber }}</td>
                        <td>{{ $player->email }}</td>
                        <td>
                            <a href="{{ route('player.edit', ['id' => $player->id]) }}" style="text-decoration: none">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                            <a href="{{ route('player.delete', ['id' => $player->id]) }}" style="text-decoration: none">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
