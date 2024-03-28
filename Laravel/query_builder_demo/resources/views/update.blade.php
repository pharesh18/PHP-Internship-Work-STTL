<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css\bootstrap.min.css">
    <script src="../js\bootstrap.bundle.min.js"></script>
    <title>Update</title>
</head>

<body class="container shadow p-5 mt-5">
    <h2 class="mb-4">Update Student</h2>
    <form method="post" action="{{ url('/update') }}/{{ $student->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-4">
            <div class="col">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="">Email</label>
                <input type="email" name="email" value="{{ $student->email }}" class="form-control">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="">Date Of Birth</label>
                <input type="date" name="dob" value="{{ $student->dob }}" class="form-control">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="">Profile Picture</label>
                <input type="file" name="profile" class="form-control">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</body>

</html>
