<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>User Data</title>
</head>
<body>
    <div class="container mt-5">
        <h2>User Data</h2>
        <div class="card">
            <div class="card-body">
                @foreach ($data as $id=>$singleUser )
                    
                <h4 class="card-title">{{$singleUser->name}}</h4>
                <p class="card-text"><strong>Email:</strong> {{$singleUser->email}}</p>
                <p class="card-text"><strong>Age:</strong> {{$singleUser->age}}</p>
                <p class="card-text"><strong>City:</strong> {{$singleUser->city}}</p>
                <a href="{{route('updetPage',$singleUser->id)}}"class="btn btn-primary">Update</a>
                <a href="{{route('allUser')}}"class="btn btn-danger">Back</a>

                @endforeach

            </div>
        </div>
    </div>
</body>
</html>
