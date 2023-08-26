<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Personal Information Form</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Personal Information</h2>
        <form action="{{ route('userAdd') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="userName" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="userEmail" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" name="userAge" id="age" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="userCity" id="city" placeholder="Enter your city">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
