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
                <input type="text" class="form-control @error('userName') is-invalid @enderror" value="{{ old('userName') }}"  name="userName" id="name" placeholder="Enter your name">
                <span class="text-danger">
                    @error('userName')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('userEmail') is-invalid @enderror" value="{{ old('userEmail') }}" name="userEmail" id="email"
                    placeholder="Enter your email">
                    <span class="text-danger">
                        @error('userEmail')
                            {{$message}}
                        @enderror
                    </span>                
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control @error('userAge') is-invalid @enderror" value="{{ old('userAge') }}" name="userAge" id="age" placeholder="Enter your age">
                <span class="text-danger">
                    @error('userAge')
                        {{$message}}
                    @enderror
                </span>
                
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control @error('userCity') is-invalid @enderror" value="{{ old('userCity') }}"name="userCity" id="city" placeholder="Enter your city">
                <span class="text-danger">
                    @error('userCity')
                        {{$message}}
                    @enderror
                </span>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
