<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>All Students</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All Students List</h1>
                <a href="/newstudent" class="btn btn-success btn-sm mb-3"> Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $student)
                        <tr>

                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td> {{ $student->email }}</td>
                            <td> {{ $student->age }}</td>
                            <td>{{ $student->city }}</td>
                            <td> <a href="{{ route('view.student', $student->id) }}" class="btn btn-primary btn-sm"> View </a></td>
                            <td> <a href="{{ route('delete.student', $student->id) }}" class="btn btn-danger btn-sm"> Delete </a></td>
                            <td> <a href="{{ route('update.page', $student->id) }}" class="btn btn-warning btn-sm"> Update </a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>
