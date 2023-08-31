<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
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
                    <form action=" {{ route('signinPost') }} " method="post">
                        @csrf
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Ex. youremail@mail.com">
                        <br>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Ex. A123@paswod">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="reset" id="reset" value="Reset" class="btn btn-outline-primary btn-form">
                </div>
                <div class="col-md-6">
                    <input type="submit" id="register" value="Signup" class="btn btn-outline-success btn-form">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
