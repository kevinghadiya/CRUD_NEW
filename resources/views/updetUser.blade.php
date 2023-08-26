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

        @foreach ($data as $id => $updetpage)
            <form action="{{ route('updetUser', $updetpage->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $updetpage->name }}" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ $updetpage->email }}" id="email">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" name="age" class="form-control" value="{{ $updetpage->age }}"id="age">

                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" name="city" class="form-control" value="{{ $updetpage->city }}" id="city">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endforeach
    </div>
</body>

</html>
