<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\bootstrap.bundle.min.js"></script>
    <title>Index</title>
</head>

<body class="container mt-5">
    <a href="{{ route('create.student') }}" class="btn btn-primary mb-3">Add Student</a>
    <table class="table table-striped border">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Profile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr scope="row">
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>
                        <img src="{{ asset($student->profile_image) }}" alt="Profile_Image">
                    </td>
                    <td>
                        <a href="{{ route('updateForm.student', ['id' => $student->id]) }}"
                            class="btn btn-secondary">Update</a>
                        <a href="{{ route('delete.student', ['id' => $student->id]) }}"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
