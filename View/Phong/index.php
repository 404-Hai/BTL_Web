<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phòng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b3b63fc99.js" crossorigin="anonymous"></script>
    </script>
    <!-- <link rel="stylesheet" href="/CSS/modal.css"> -->
    <style>
        #room-content a {
            background-color: #f6e58d;
            color: #535c68;
        }

        #room-content a:hover {
            background-color: #f9ca24;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center noselect"
        style="height: 40vh;;margin-bottom:0; background-image: url(/Image/logo.png);  background-position: center;background-repeat: no-repeat; background-size: cover; ">
    </div>

    <nav id="about-navbar" class="navbar navbar-expand-md bg-dark navbar-dark d-flex sticky-top w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around align-item-center" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View/about.php" id="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View/about.php#otherContact" id="">
                        Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View/about.php#otherRule" id="">
                        Nội quy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View/booking.php">Đặt phòng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View/account.php">Tài khoản</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/View/rulebooking.php">
                        Quy định đặt phòng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#!">
                        Phòng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View/offer.php">
                        Ưu đãi</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="room-content" class="container">

        <!-- Page Heading -->
        <h1 class="my-4 text-center text-uppercase border border-warning rounded p-3">Bảng giá phòng
        </h1>

        <!-- single -->
        <div class="row">
            <div class="col-md-7">
                <a href="/View/Phong/single.php">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="/Image/phongdon2.jpg"
                        style="width: 700px; height: 400px;" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Phòng đơn</h3>
                <p>Phòng 1-2 người</p>
                <a class="btn btn-primary" href="/View/Phong/single.php">View Room</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- double -->
        <div class="row">
            <div class="col-md-7">
                <a href="/View/Phong/double.php">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="/Image/phongdoi2.jpg"
                        style="width: 700px; height: 400px;" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Phòng đôi</h3>
                <p>Phòng 2 người có bồn tắm gỗ</p>
                <a class="btn btn-primary" href="/View/Phong/double.php">View Room</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- groups -->
        <div class="row">
            <div class="col-md-7">
                <a href="/View/Phong/group.php">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="/Image/phongtapthe2.jpg"
                        style="width: 700px; height: 400px;" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Phòng tập thể</h3>
                <p>Phòng 4 - 6 người</p>
                <a class="btn btn-primary" href="/View/Phong/group.php">View Room</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- king -->
        <div class="row">

            <div class="col-md-7">
                <a href="/View/Phong/king.php">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="/Image/phongking2.jpg"
                        style="width: 700px; height: 400px;" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Phòng King</h3>
                <p>Phòng 4 người, phòng gia đình sang trọng </p>
                <a class="btn btn-primary" href="/View/Phong/king.php">View Room</a>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4 w-100">



        <div class="bg-dark p-3 text-light">
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <button class="btn btn-facebook btn-link btn-icon-only btn-circle waves-effect ">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button class="btn btn-twitter btn-link btn-icon-only btn-circle waves-effect waves-teal text-info">
                        <i class="fab fa-twitter"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button
                        class="btn btn-google btn-link btn-icon-only btn-circle waves-effect waves-red btn-lg text-danger">
                        <i class="fab fa-google-plus-g"></i>
                    </button>
                </li>
            </ul>
            <!-- Social buttons -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="color: #BDC581; ">© 2019 Copyright: Khách sạn người
                mơ
            </div>
            <!-- Copyright -->
        </div>
    </footer>
    <!-- Footer -->



    <script>
        $(".collapse.show").each(function () {
            $(this).prev(".card-header").addClass("highlight");
        });

        // Highlight open collapsed element 
        $(".card-header .btn").click(function () {
            $(".card-header").not($(this).parents()).removeClass("highlight");
            $(this).parents(".card-header").toggleClass("highlight");
        });
    </script>
</body>

</html>