<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #eee !important;
        }

        .login {
            background-color: #fff;
            width: 40%;
            margin: 80px auto;
            border-radius: 10px;
            padding: 20px;
            border-left: 5px solid #009688;
            box-shadow: 0px 0px 0px 0px #3f51b5;
        }

        .login>.row>h2 {
            margin: auto;
        }

        .btn-form {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="row">
                <h2>Sign Up</h2>
                <div class="col-md-12">
                    <form action="{{ route('loginpost') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="signup-box">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                <input type="name" value="{{ old('userName') }}" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Enter Your Name" name="userName">

                                <span class="text-danger">
                                    @error('userName')
                                        {{ $message }}
                                    @enderror
                                </span><br>
                            </div>
                            <label for="email">E-mail:</label>
                            <input type="email" value="{{ old('userEmail') }}" name="userEmail" class="form-control"
                                placeholder="youremail@email.com">
                            <span class="text-danger">
                                @error('userEmail')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <label for="email">Password:</label>
                            <input type="password" value="{{ old('userPassword') }}" name="userPassword"
                                class="form-control" placeholder="password">
                            <span class="text-danger">
                                @error('userPassword')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <label for="email">Confirm password:</label>
                            <input type="password" value="{{ old('userConPassword') }}" name="userConPassword"
                                class="form-control" placeholder="Confirm password">
                            <span class="text-danger">
                                @error('userConPassword')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="reset" id="reset" value="Reset"
                                    class="btn btn-outline-primary btn-form">
                            </div>
                            <div class="col-md-6">
                                <input type="submit" id="register" value="Signup"
                                    class="btn btn-outline-success btn-form">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
