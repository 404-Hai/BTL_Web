<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/CSS/about.css">
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b3b63fc99.js" crossorigin="anonymous"></script>
    </script>
    <!-- <link rel="stylesheet" href="/CSS/modal.css"> -->
    <style>
        .fakeimg img {
            width: 100%;
            height: 300px;
            background: #aaa;
        }

        #faq p {
            text-indent: 40px;
            text-align: justify;
        }

        h2 {
            margin-top: 20px;
        }

        h1,
        h2 {
            font-family: 'Raleway', sans-serif;
        }

        .text-description {
            font-family: 'Montserrat', sans-serif;
            margin-top: 10px;
        }

        .accordion .card {
            background: none;
            border: none;
        }

        .accordion .card .card-header {
            background: none;
            border: none;
            padding: .4rem 1rem;
            font-family: "Roboto", sans-serif;
        }

        .accordion .card-header h2 span {
            float: left;
            margin-top: 10px;
        }

        .accordion .card-header .btn {
            color: #2f2f31;
            font-size: 1.04rem;
            text-align: left;
            position: relative;
            font-weight: 500;
            padding-left: 2rem;
        }

        .accordion .card-header i {
            font-size: 1.2rem;
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 9px;
        }

        .accordion .card-header .btn:hover {
            color: #ff8300;
        }

        .accordion .card-body {
            color: #324353;
            padding: 0.5rem 3rem;
        }

        .page-title {
            margin: 3rem 0 3rem 1rem;
            font-family: "Roboto", sans-serif;
            position: relative;
        }

        .page-title::after {
            content: "";
            width: 80px;
            position: absolute;
            height: 3px;
            border-radius: 1px;
            background: #73bb2b;
            left: 0;
            bottom: -15px;
        }

        .accordion .highlight .btn {
            color: #74bd30;
        }

        .accordion .highlight i {
            transform: rotate(180deg);
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center noselect"
        style="height: 40vh;;margin-bottom:0; background-image: url(/Image/logo.png);  background-position: center;background-repeat: no-repeat; background-size: cover; ">
        <h1 style="color: #BDC581;"></h1>
        <p style="color: #BDC581;"></p>
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
                    <a class="nav-link active" href="#!" id="otherAbout">About</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" id="otherContact">
                        Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" id="otherRule">
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
                    <a class="nav-link" href="/View/room.php">
                        Phòng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/view/offer.php">
                        Ưu đãi</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- content -->
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="w-100">
                    <img src="/Image/sangtrongiphone.png" alt="" style="width:100%;">
                </div>
                <ul id="about-side-nav" class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="" id="about-hello">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="about-contact">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="about-rule">Nội quy khách sạn</a>
                    </li>
                </ul>
            </div>

            <!-- content -->
            <div id="show-content-about" class="col-xs-12 col-md-8"></div>
        </div>
    </div>

    <!-- faq -->
    <div class="container mt-3" id="faq">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title">FAQs</h1>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="clearfix mb-0">
                                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"><i
                                        class="fa fa-chevron-circle-down"></i> Thông tin khách sạn</a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Giờ nhận phòng từ 2.00 PM
                                    </li>
                                    <li>
                                        Giờ trả phòng vào 12.00 PM
                                    </li>
                                    <li>
                                        Chấp nhận hầu hết các loại thẻ tín dụng
                                    </li>
                                    <li>
                                        Chỗ đậu xe miễn phí
                                    </li>
                                    <li>
                                        Tiện ích hỗ trợ xe lăn
                                    </li>
                                    <li>
                                        Phòng hút thuốc
                                    </li>
                                    <li>
                                        Cho phép mang theo thú cưng
                                    </li>
                                    <li>
                                        Wi-Fi trong phòng
                                    </li>
                                    <li>
                                        Dịch vụ đổi tiền
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"><i
                                        class="fa fa-chevron-circle-down"></i> Có gì xung quanh khách sạn?</a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Được người dân địa phương gọi bằng cái tên trìu mến Sài Gòn, TP. Hồ
                                    Chí Minh còn được biết đến là “Hòn ngọc Viễn Đông”. Thành phố vẫn lưu giữ nét duyên
                                    dáng
                                    gợi nhớ về những di sản mang phong cách Pháp-châu Âu trong bối cảnh thương mại hóa
                                    diễn
                                    ra nhanh chóng hiện nay. Được mô tả là thành phố có sự phát triển thương mại và văn
                                    hóa
                                    mạnh mẽ, hình ảnh của TP. Hồ Chí Minh hiện lên là sự hòa quyện giữa những con hẻm
                                    bất
                                    tận và các đường phố với những tòa nhà cao tầng hiện đại; của các sạp hàng gỗ cũ kỹ
                                    bán
                                    gia vị, lụa là và những tòa nhà chọc trời bằng thép và kính, các trung tâm thiết kế,
                                    nhà
                                    hàng cao cấp hay quán bar sành điệu. Thành phố hứa hẹn mang đến trải nghiệm hấp dẫn
                                    bất
                                    tận cho những du khách muốn khám phá lịch sử phong phú 4000 năm của Việt Nam. Với
                                    dân số
                                    khoảng 9 triệu người, TP. Hồ Chí Minh là một địa điểm thu hút ngày càng nhiều khách
                                    du
                                    lịch, đồng thời cũng là trung tâm thương mại, công nghiệp, công nghệ và khoa học của
                                    Việt Nam.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree"><i
                                        class="fa fa-chevron-circle-down"></i> Lời khuyên cho du khách</a>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <u>
                                            Tiền tệ
                                        </u> <br>
                                        Quý khách có thể đổi tiền mặt và séc tại các ngân hàng hoặc điểm đổi tiền. Khách
                                        sạn Equatorial TP. Hồ Chí Minh, các khách sạn lớn và các trung tâm mua sắm đều
                                        chấp nhận thẻ Master Card và thẻ Visa. Vui lòng kiểm tra với nhân viên trước khi
                                        mua hàng vì một số cơ sở nhỏ có thể không chấp nhận thẻ tín dụng. Đồng Đô-la Mỹ
                                        là đồng tiền được ưa chuộng nhất, do đó quý khách nên mang theo Đô-la Mỹ. Các
                                        đồng tiền của Anh, Úc, Nhật Bản, Pháp, Đức, Bỉ, Hà Lan, Singapore và Thái Lan có
                                        thể được trao đổi tại các thành phố lớn (như TP. Hồ Chí Minh, Hà Nội, Đà Nẵng,
                                        Hải Phòng). <br> <br>

                                        <u>Thị thực </u> <br>
                                        Mọi khách du lịch quốc tế đến Việt Nam đều cần thị thực. Thị thực nhập cảnh có
                                        thể xin tại Đại sứ quán, lãnh sự quán hoặc đại lý du lịch Việt Nam. Thủ tục cấp
                                        thị thực mất khoảng năm ngày làm việc, khi đã được cấp thị thực, quý khách phải
                                        nhập cảnh trong vòng 90 ngày. Thị thực du lịch có thể nhập cảnh một lần hoặc
                                        nhiều lần và thị thực công tác có thể xin qua cơ quan bảo trợ của Việt Nam, có
                                        hiệu lực tối đa sáu tháng và cho phép nhập cảnh nhiều lần. Nếu thị thực được cấp
                                        là một tờ rời, hãy tiến hành sao chụp và tách riêng với hộ chiếu.
                                        <br> <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <u>
                                            Trang phục

                                        </u> <br>
                                        Quý khách có thể mặc những trang phục bình thường thoải mái nhưng vẫn lịch sự.
                                        Không nên mặc những trang phục hở vai và chân khi đến thăm đền, chùa hay nhà
                                        thờ. <br> <br>


                                        <u>Chăm sóc sức khỏe</u> <br>

                                        Dịch vụ y tế tại TP. Hồ Chí Minh tương đối tốt, nhưng ra khỏi các thành phố lớn,
                                        dịch vụ y tế có thể không được đảm bảo . Hãy hỏi ý kiến của bác sĩ về các yêu
                                        cầu sức khỏe trước chuyến đi. <br>


                                        <br> <u>Nước uống</u> <br>

                                        Ngoài nước đun sôi, nước máy được tiêu thụ nhiều nhất. Nước uống đóng chai và
                                        nước khoáng cũng rất phổ biến. <br>


                                        <br><u>Chính sách tiền thưởng</u> <br>

                                        Tiền thưởng (tiền boa) không bắt buộc nhưng rất được trân trọng. Một số nhà hàng
                                        tính thêm 10%-15% cho phí dịch vụ và thuế Giá trị gia tăng. Tiền boa khoảng 0,5
                                        – 1 USD được coi là phù hợp cho nhân viên phục vụ phòng hoặc nhân viên hành lý.
                                        <br>

                                        <br><u>
                                            Phương tiện công cộng

                                        </u> <br>

                                        Taxi tính theo công- tơ-mét rất phổ biến và có giá cả phải chăng, đặc biệt là
                                        tại TP. Hồ Chí Minh, nơi có rất nhiều hãng taxi để quý khách lựa chọn. Quý khách
                                        cũng có thể chọn dịch vụ thuê xe có người lái tại các thành phố lớn với giá từ
                                        25 đến 100 USD một ngày. <br> <br>
                                    </div>




                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <u>
                                            Điện thoại di động

                                        </u><br>
                                        Mạng GSM hiện tại đang được sử dụng tại Việt Nam. <br>
                                        <br>
                                        <u>
                                            Sân bay

                                        </u><br>
                                        Các sân bay quốc tế tại Việt Nam gồm có:
                                        Sân bay Tân Sơn Nhất (SGN) tại TP. Hồ Chí Minh, Sân bay Quốc tế Đà Nẵng (DAD)
                                        tại
                                        TP. Đà Nẵng và Sân bay Quốc tế Nội Bài (HAN) tại Hà Nội. <br>

                                        <br><u>
                                            Sân bay nội địa:

                                        </u><br>
                                        Sân bay Buôn Ma Thuột (BMV) và Sân bay Cam Ranh (VVCR) <br>
                                        <br> <u>
                                            Thuế sân bay
                                        </u> <br>
                                        Thuế khởi hành quốc tế là 14 USD và khởi hành nội địa là 15.000 đến 20.000 VND
                                        (khoảng gần 1 USD). <br>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour"><i
                                            class="fa fa-chevron-circle-down"></i> Giá phòng tại khách sạn áp dụng theo
                                        phòng hay theo số lượng người?</a>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Các mức giá được áp dụng cho 2 người/phòng đối với phòng đôi, 1 người/1 phòng cho
                                    phòng đơn
                                    và người thứ ba sẽ được tính phí thêm 200.000 VND với giường phụ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4 w-100">

        <!-- Call to action -->
        <ul id="about-ask" class="list-unstyled list-inline text-center py-2 bg-secondary text-light"
            style="height: 100px;">
            <li class="list-item">
                <h5 class="mb-2"> Bạn có câu hỏi cần hỏi?</h5>
            </li>
            <li class="list-item">
                <button type="button" class="btn btn-danger w-25 btn-rounded" data-toggle="modal"
                    data-target="#modal-askeme">
                    Ask me!
                </button>
            </li>
        </ul>
        <!-- Call to action -->
        <hr>

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


    <!-- modal askme -->
    <div id="modal-askeme" class="modal fade">
        <div class="modal-dialog modal-newsletter">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <div class="icon-box mx-auto">
                            <i class="far fa-envelope-open fa-7x" style="color: #49c5c1;"></i>
                        </div>
                        <button type="button" class="close position-absolute" data-dismiss="modal"
                            aria-hidden="true"><span>&times;</span></button>
                    </div>
                    <div class="modal-body text-center">
                        <h4>Bạn có câu hỏi cho chúng tôi?</h4>
                        <p>Nhập câu hỏi của bạn vào đây</p>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <label for="question"></label>
                            <textarea class="form-control" name="question" id="question" rows="3"
                                placeholder="Câu hỏi của bạn" required></textarea>
                            <input type="submit" class="btn btn-block mt-1 text-light"
                                style="background-color: #49c5c1;" value="Ask">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {


            $(".collapse.show").each(function () {
                $(this).prev(".card-header").addClass("highlight");
            });

            // Highlight open collapsed element
            $(".card-header .btn").click(function () {
                $(".card-header").not($(this).parents()).removeClass("highlight");
                $(this).parents(".card-header").toggleClass("highlight");
            });
            $("#about-side-nav a").click(function (e) {
                e.preventDefault();
                // If this isn't already active
                if (!$(this).hasClass("active")) {
                    // Remove the class from anything that is active
                    $("a.active").removeClass("active");
                    // And make this active
                    $(this).addClass("active");

                    if ($(this).is("#about-hello")) {
                        $("#show-content-about").load("about-child.php");
                    } else if ($(this).is("#about-contact")) {
                        $("#show-content-about").load("about-contact.php");
                    } else if ($(this).is("#about-rule")) {
                        $("#show-content-about").load("about-rule.php");
                    }
                }
            });

            $('#otherContact').click(function (e) {
                e.preventDefault();
                $("#about-side-nav a.active").removeClass("active");
                $("#about-navbar a.active").removeClass("active");
                // And make this active
                $('#about-contact').addClass("active");
                $('#otherContact').addClass("active");

                // load

                $('#show-content-about').load('about-contact.php');
                //scroll
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#show-content-about").offset().top
                }, 700);
            })

            $('#otherAbout').click(function (e) {
                e.preventDefault();
                $("#about-side-nav a.active").removeClass("active");
                $("#about-navbar a.active").removeClass("active");

                // And make this active
                $('#about-hello').addClass("active");
                $('#otherAbout').addClass("active");

                // load

                $('#show-content-about').load('about-child.php');
                //scroll
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#show-content-about").offset().top
                }, 700);
            })

            $('#otherRule').click(function (e) {
                e.preventDefault();
                $("#about-side-nav a.active").removeClass("active");
                $("#about-navbar a.active").removeClass("active");

                // And make this active
                $('#about-rule').addClass("active");
                $('#otherRule').addClass("active");

                // load

                $('#show-content-about').load('about-rule.php');
                //scroll
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#show-content-about").offset().top
                }, 700);
            })

            $("#show-content-about").load("about-child.php");

            var hash = window.location.hash;
            if (hash) {
                $(hash).click();
            }
        });
    </script>
</body>

</html>