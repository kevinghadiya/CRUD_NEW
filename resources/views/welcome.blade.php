<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>User Data Table</title>
</head>

<body>
    <div class="container mt-5">
        <nav class="d-flex justify-content-between px-2 rounded  m-2 align-items-center bg-secondary">

            <h2 class="text-white">User Data</h2>
            <a href="{{ route('userPage') }}" class="btn btn-light text-black">Add User</a>

        </nav>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $id => $allUser)
                    <tr class="text-center">
                        <td> {{ $allUser->id }} </td>
                        <td> {{ $allUser->name }} </td>
                        <td> {{ $allUser->email }} </td>
                        <td class="text-center d-flex justify-content-around">
                            <a href="{{ route('singleUser', $allUser->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('deleteUser', $allUser->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>

</html>
