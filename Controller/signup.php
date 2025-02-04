<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <script src="https://kit.fontawesome.com/7b3b63fc99.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="/CSS/signup.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <style>
        .card-body {
            position: relative;
        }

        h4::before {
            content: "";
            height: 2px;
            width: 30%;
            background: #d4d4d4;
            position: absolute;
            left: 10px;
            top: 5%;
            /* z-index: 2; */
        }

        h4::after {
            content: "";
            height: 2px;
            width: 30%;
            background: #d4d4d4;
            position: absolute;
            right: 10px;
            top: 5%;
        }

        hr {
            border: 1px solid white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-custom my-5">
                    <!-- <img class="card-img-top image-background" src="/Image/signinimg.png"
                            style="max-width:100%;height:auto;"> -->

                    <div class="card-body">
                        <h4 class="card-title text-center text-white">Sign Up</h4>
                        <form action="../Controller/adduser.php" method="POST" enctype="multipart/form-data" class="form-signin">
                            <div class="row">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-label-group">
                                        <input type="text" id="inputFirstName" name="firstname" class="form-control"
                                            placeholder="First Name" required autofocus >
                                        <label for="inputFirstName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-label-group">
                                        <input type="text" id="inputLastName" name="lastname"class="form-control"
                                            placeholder="Last Name" required autofocus>
                                        <label for="inputLastName">Last Name</label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address"
                                    required>
                                <label for="inputEmail">Email address</label>
                            </div>


                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                                    required>
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPasswordAgain" class="form-control"
                                    placeholder="Retype Password" required>
                                <label for="inputPasswordAgain">Confirm Password</label>
                            </div>

                            <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase my-3">Sign
                                up</button>

                            <div class="mt-3 text-right ">
                                <a class="text-primary" href="signin.php">Already have one ?</a>
                            </div>

                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                    class="fab fa-google mr-2"></i> Sign in with Google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                    class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>