<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap&subset=vietnamese"
		rel="stylesheet" />
	<script src="https://kit.fontawesome.com/7b3b63fc99.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--jquery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- style css -->
	<link rel="stylesheet" href="/CSS/style.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="/CSS/bootstrap-social.css">

</head>

<body>
	<div id="navbar" class="container-nav">
		<div class="nav-links">
			<li>
				<a href="/View/about.php">About</a>
			</li>
			<li class="container-dropdown-hover">
				<a class="button-hover" href="/View/room.php">Room</a>
				<div class="dropdown-hover-content">
					<a href="/View/room.php">ROOM DETAILS</a>
				</div>
			</li>

			<li>
				<a href="/View/offer.php">Offers</a>
			</li>
			<li>
				<a href="/View/about.php#otherContact">Contact</a>
			</li>
			<li>
				<a href="/View/account.php">ACCOUNT</a>
			</li>
			<li>
				<a href="#order-box">Find</a>
			</li>
		</div>

		<div class="nav-menu">
			<i class="fas fa-ellipsis-h"></i>
		</div>
	</div>
	<div id="home" class="nav-logo">
		<a href="#!">
			<h4>The dreamer hotel</h4>
		</a>
	</div>

	<!--HEADER-->

	<div class="container-header">
		<div class="slidershow">
			<div class="header-slides noselect">
				<input type="radio" name="temp-for-nav" id="r1" checked />
				<input type="radio" name="temp-for-nav" id="r2" />
				<input type="radio" name="temp-for-nav" id="r3" />
				<input type="radio" name="temp-for-nav" id="r4" />
				<input type="radio" name="temp-for-nav" id="r5" />
				<div class="header-slide active-header-slide">
					<img src="/Image/1.png" alt="" />
					<div class="text-wrapper-image">
						<h1>Indulge in luxury</h1>
						<h6>Sumptuous paradise in the heart of the city</h6>
					</div>
				</div>
				<div class="header-slide">
					<img src="/Image/5.png" alt="" />
					<div class="text-wrapper-image">
						<h1>A View To Die For</h1>
						<h6>More than paradise</h6>
					</div>
				</div>

				<div class="header-slide">
					<img src="/Image/3.png" alt="" />
					<div class="text-wrapper-image">
						<h1>Fast, Friendly First Contact</h1>
						<h6>
							"They should be happy to serve guests, and not angling for a
							tip"
						</h6>
					</div>
				</div>
				<div class="header-slide">
					<img src="/Image/4.png" alt="" />
					<div class="text-wrapper-image">
						<h1>More Blue, More Green, More Fresh</h1>
						<h6>
							"The smell of the carpet in a hotel room is the same everywhere"
						</h6>
					</div>
				</div>
				<div class="header-slide">
					<img src="/Image/2.png" alt="" />
					<div class="text-wrapper-image">
						<h1>Lavish & Comfort</h1>
						<h6>
							Super-luxury hotels are being built in outer space. The new type
							of heaven is being offered to humans
						</h6>
					</div>
				</div>
			</div>

			<div class="navigation-header">
				<label for="r1" class="bar"></label>
				<label for="r2" class="bar"></label>
				<label for="r3" class="bar"></label>
				<label for="r4" class="bar"></label>
				<label for="r5" class="bar"></label>
			</div>
		</div>
		<!-- box order -->

		<div id="order-box" class="container container-order-box">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="booking_form_container">
							<form action="../Controller/addcheckin.php" method="POST" enctype="multipart/form-data">
								<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div
										class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
										<div><input type="text"
												class="datepicker booking_input booking_input_a booking_in"
												placeholder="Check in" required="required" id="checkinid" name="checkin"></div>
										<div><input type="text"
												class="datepicker booking_input booking_input_a booking_out"
												placeholder="Check out" required="required" id="checkoutid" name="checkout"></div>
										<div><input type="number" class="booking_input booking_input_b"
												placeholder="People" min="1" max="50" name="people"required></div>
										<div><input type="number" class="booking_input booking_input_b"
												placeholder="Room" min="1" max="9" name="number" required></div>
									</div>
									<div><button class="booking_button">FIND</button></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- box order -->

	<!-- Charming accomodation -->
	<div id="container-content-charming" class="container my-4">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3 mt-md-auto">
				<img src="/Image/hinhnhincaiho.png" style="width:100%">;
			</div>
			<div id="container-content-charming-text" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-md-auto">
				<div>CHARMING ACCOMODATION</div>
				<h2>Incredible Views Lush Comfort</h2>
				Bạn đang tìm kiếm để làm ngạc nhiên rằng một người đặc biệt với một nơi nghỉ ngơi lãng mạn, hoặc bạn
				muốn thưởng
				thức một bữa tiệc ẩm thực cho đến khi mặt trời lặn, có thể bạn thích thư giãn trong khi tận hưởng một
				chuyến đi xe
				đạp tuyệt vời qua cồn cát? Chúng tôi hiện đang cung cấp 9 sắp xếp đặc biệt giúp giải trí ở một cấp độ
				khác.
			</div>
		</div>
	</div>
	<!-- Charming accomodation -->

	<!-- Activity season grid -->

	<div class="container-activity-grid container-fluid">
		<div class="row">
			<div id="image1" class="col-6 col-md-3">
				<img src="/Image/kytucxa.png"
					class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
					alt="">
				<div class="activity-desc1 d-flex flex-column justify-content-center align-items-center">
					<h3>Elegant</h3>
					<div>Một nơi thanh lịch, sạch sẽ, trang nhã phù hợp với lối sống đoan trang, sang trọng dành cho quý
						khách</div>
				</div>
			</div>
			<div id="image2" class="col-6 col-md-3">
				<img src="/Image/hinhnhinrangoaibuoitoi.png"
					class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
					alt="">
				<div class="activity-desc2 d-flex flex-column justify-content-center align-items-center">
					<h3>Romantic</h3>
					<div>Bạn đang tìm kiếm để làm ngạc nhiên người đặc biệt với một nơi nghỉ ngơi lãng mạn, hoặc bạn
						muốn</div>
				</div>
			</div>
			<div id="image3" class="col-6 col-md-3 ">
				<img src="/Image/phongngambien.png"
					class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
					alt="">
				<div class="activity-desc3 d-flex flex-column justify-content-center align-items-center">
					<h3>Majestic</h3>
					<div>Không gian và quang cảnh sẽ không khỏi làm bạn ngạc nhiên, sự tuyệt vời của thành phố và thiên
						nhiên hoà quyện vào nhau</div>
				</div>
			</div>
			<div id="image4" class="col-6 col-md-3">
				<img src="/Image/hinhnetflix.png"
					class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
					alt="">
				<div class="activity-desc d-flex flex-column justify-content-center align-items-center">
					<h3>Season</h3>
					<div>Sự thay đổi của thời tiết và khí hậu là một thứ đặc trưng của thành phố nơi đây, khách sạn cũng
						như vậy</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Activity grid -->

	<!-- special offers -->
	<div class="container-offer my-3">
		<img id="offer-background" src="/Image/baibienxanhdep.png"
			class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""
			style="display: block; width: 100%; height: 90vh">
		<div class="offer-info">
			<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="/Image/hinhnhanvien.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Ưu đãi cho nhóm từ bây giờ</h5>
						<p class="card-text">Giảm giá cho nhóm khách từ 10 người, gia đình, công ty.<br>
							Trọn gói các dịch vụ hiện có ở khách sạn, giá rẻ bất ngờ !!</p>
						<p class="card-text"><small class="text-muted"><a href="/View/Offers/groups.php">See
									more...</a></small></p>

					</div>
					<div class="card-footer">
						<small class="text-muted">Jan, 4 2019 &#8594 Feb, 5 2019</small>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="/Image/doan2.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Buffet sáng và trưa chỉ từ 100k</h5>
						<p class="card-text">Ăn thoải mái tại nhà hàng khách sạn theo tiêu chuẩn 5 sao hiện
							đại, cao cấp <br>
							Đầy đủ các món ăn bắc, trung, nam. <br>Tráng miêng và đồ uống đi kèm miễn phí !!!</p>
						<p class="card-text"><small class="text-muted"><a href="/View/Offers/buffet.php">See
									more...</a></small></p>

					</div>
					<div class="card-footer">
						<small class="text-muted">June, 12 2019 &#8594 Feb, 5 2020</small>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="/Image/massage.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Relieve Stress giảm giá tới 50%</h5>
						<p class="card-text">Bạn có thể thoải mái với liệu trình spa vào mỗi chiều từ 3h - 5h, kèm theo
							đồ uống và sự chăm
							sóc nhiệt tình của các nhân viên chuyên nghiệp.
						</p>
						<p class="card-text"><small class="text-muted"><a href="/View/Offers/massage.php">See
									more...</a></small></p>
					</div>
					<div class="card-footer">
						<small class="text-muted">Dec, 2 2019 &#8594 Dec, 24 2019</small>
					</div>
				</div>
			</div>
			<a name="specialoffers" id="button-specialoffers" class="btn btn-primary btn-lg" href="/View/offer.php"
				role="button">more
				special
				offers</a>
		</div>
	</div>
	<!-- <div class="container">
            <div class="row">
                <div class="col-md-10 col-center m-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="/Image/1.png" class="img-responsive img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>London</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                    tempor, varius quam.</p>
                                                <a href="#" class="btn btn-primary">More <i
                                                        class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="/Image/1.png" class="img-responsive img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>New York</h4>
                                                <p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in
                                                    fringilla vivamus.</p>
                                                <a href="#" class="btn btn-primary">More <i
                                                        class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="/Image/1.png" class="img-responsive img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Paris</h4>
                                                <p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus
                                                    adipiscing dolor.</p>
                                                <a href="#" class="btn btn-primary">More <i
                                                        class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                
                        </div>
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fas fa-angle-left fa-2x"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fas fa-angle-right fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

	<!-- special offers -->


	<!-- review saying-->

	<div class="container-review my-3 pt-3">
		<div class="review-label">
			<h3>our reviews</h3>
			<h2>What guests are saying:</h2>
		</div>
		<!-- Full-width slides/quotes -->
		<div class="review-slides">
			<b>Trải nghiệm tuyệt vời tại khách sạn 5 sao
			</b> <br> <br>
			<p>Chúng tôi nghỉ một đêm ở đây và rất ấn tượng với thủ tục check-in nhanh chóng khi đến nhận phòng vào lúc
				tối muộn.
				Chúng tôi được nâng cấp miễn phí lên phòng Premier có ban công nhìn xuống đường và có 2 mặt thoáng.
				Buffet ở đây
				có hương vị độc đáo, món ăn cổ truyền Việt Nam được chế biến theo cách mới hiện đại rất thú vị. Nhân
				viên hành lý
				đã hỗ trợ chúng tôi nhiệt tình ngay khi chúng tôi vừa đặt chân tới khách sạn.
				<br>
				<ol>
					<li>Phòng ốc sạch sẽ.</li>
					<li>Lễ tân nhà hàng thực sự chủ động trong giao tiếp với thực khách và nên chào khách bằng tiếng
						Việt
						nữa,
						chứ không chỉ tiếng Anh.</li>
					<li>Món xôi lá sen nhân thịt chế biến ngon</li>
				</ol>
			</p>
			<p class="author"><img src="/Image/people3.jpg" class="img-fluid rounded-circle" alt="">Michael Nguyễn</p>
		</div>

		<div class="review-slides">
			<b>Tiện nghi. Phục vụ tốt
			</b> <br> <br>
			<p>Phòng khách sạn bài trí đẹp, tiện nghi đầy đủ. View đẹp, khá lãng mạn cho các cặp đôi. Phục vụ nhiệt
				tình, đồ ăn
				ngon, giá cả tương đối hợp lý. Khách sạn gần trung tâm nên ban đêm đi tham quan xung quanh rất tiện.
			</p>
			<p class="author"><img src="/Image/people1.jpg" class="img-fluid rounded-circle" alt=""> Larrah Snow
			</p>
		</div>

		<div class="review-slides">
			<b>Khách sạn tuyệt vời. Vị trí tuyệt vời
			</b> <br> <br>
			<p>Chồng tôi và tôi đã có một kỳ nghỉ rất thư giãn tại khách sạn này. Nhân viên rất thân thiện và phòng
				rộng, sạch sẽ
				và rất thoải mái. Chúng tôi đặc biệt thích bữa buffet vào buổi sáng, có rất nhiều món ăn để lựa chọn.
				Tôi thực sự
				thích món cháo với nhiều topping khác nhau, còn có dim sum, bánh ngọt và bánh nướng, phở cũng rất ngon.
				Ngoài ra
				còn có nhiều loại cà phê và nước trái cây và rất nhiều trái cây tươi. Chúng tôi chắc chắn sẽ quay lại
				nếu có dịp
			</p>
			<p class="author"><img src="/Image/people2.jpg" class="img-fluid rounded-circle" alt="">Sarah Larson</p>
		</div>

		<!-- review-button-next/review-slides buttons -->
		<a class="review-button-previous" onclick="plusSlides(-1)">&#10094;</a>
		<a class="review-button-next" onclick="plusSlides(1)">&#10095;</a>
		<!-- Dots/bullets/indicators -->
		<div class="review-container-dot">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
	</div>



	<!-- google map -->
	<div class="container-googlemap container-fluid my-3">
		<div class="row">
			<div class="col-12 col-md-6 p-2">
				<div class="googleMap-info">
					<div>PERFECT SPOT</div>
					<div class="icon-googlemap" style="font-size: 24px"><i class="fas fa-route fa-7x"></i></div>
					<h2 class="text-center">Ốc đảo bình yên trong hưng trí của Sài Gòn!</h2>

					<p style="text-indent: 30px;text-align: justify; ">Được người dân địa phương gọi bằng cái tên trìu
						mến Sài Gòn, TP.
						Hồ
						Chí Minh còn được biết đến là
						“Hòn ngọc Viễn
						Đông”. Thành phố vẫn lưu giữ nét duyên dáng gợi nhớ về những di sản mang phong cách Pháp-châu Âu
						trong bối cảnh
						thương mại hóa diễn ra nhanh chóng hiện nay. Được mô tả là thành phố có sự phát triển thương mại
						và văn hóa
						mạnh mẽ, hình ảnh của TP. Hồ Chí Minh hiện lên là sự hòa quyện giữa những con hẻm bất tận và các
						đường phố với
						những tòa nhà cao tầng hiện đại; của các sạp hàng gỗ cũ kỹ bán gia vị, lụa là và những tòa nhà
						chọc trời bằng
						thép và kính, các trung tâm thiết kế, nhà hàng cao cấp hay quán bar sành điệu. Thành phố hứa hẹn
						mang đến trải
						nghiệm hấp dẫn bất tận cho những du khách muốn khám phá lịch sử phong phú 4000 năm của Việt Nam.
						Với dân số
						khoảng 9 triệu người, TP. Hồ Chí Minh là một địa điểm thu hút ngày càng nhiều khách du lịch,
						đồng thời cũng là
						trung tâm thương mại, công nghiệp, công nghệ và khoa học của Việt Nam.</p>
					<h4>Khoảng cách từ Khách sạn The Dreamer TP. Hồ Chí Minh tới các địa điểm nổi tiếng:</h4>

					<div class="table-responsive">
						<table class="table table-striped text-center">
							<thead class="thead-light">
								<tr>
									<th scope="col">Địa điểm</th>
									<th scope="col">Khoảng cách</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Chợ Bến Thành</td>
									<td>2km</td>
								</tr>
								<tr>
									<td>Nhà thờ Đức Bà</td>
									<td>3km</td>
								</tr>
								<tr>
									<td>Sân bay Tân Sơn Nhất</td>
									<td>7km</td>
								</tr>
							</tbody>
						</table>
					</div>


					<div class="googleMap-info-image">
						<img src="/Image/dapxedap.png" class="img-fluid rounded-circle" alt="">
					</div>

				</div>

			</div>
			<div class="col-12 col-md-6 p-2">
				<div id="googleMap" style="width:100%;height:100%;"></div>

			</div>
		</div>
	</div>
	<!-- google map -->



	<!-- Footer -->
	<footer id="footer" class="page-footer font-small blue-grey lighten-5">
		<div class="footer-head">
			<div class="alert alert-info text-center" role="alert">
				Bạn có <a href="/View/about.php#faq" class="alert-link">câu hỏi</a> gì cần hỏi chúng tôi
			</div>
		</div>

		<div class="text-center text-md-left mt-5 footer-body">
			<div class="row mt-3 dark-grey-text">
				<div class="col-md-3 col-lg-4 col-xl-3 mx-3">
					<h6 class="text-uppercase font-weight-bold">The dreamer hotel</h6>
					<hr style="height: 10px;border: 0;	box-shadow: 0 10px 10px -10px #8c8b8b inset;" />
					<p>
						Chào mừng quý khách đến với The Dreamer Hotel, để tham khảo phòng quý khách vui lòng truy cập <a
							href="/View/booking.php">tại đây</a> <br> <br>
						Liên hệ hotline: 0938516875 để đặt phòng hoặc inbox page The Dreamer Hotel
					</p>
				</div>

				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
					<h6 class="text-uppercase font-weight-bold">ưu đãi</h6>
					<hr style="height: 10px;border: 0;	box-shadow: 0 10px 10px -10px #8c8b8b inset;" />
					<p>
						<a class="dark-grey-text" href="/View/Offers/groups.php">Ưu đãi cho nhóm</a>
					</p>
					<p>
						<a class="dark-grey-text" href="/View/Offers/buffet.php">Buffet sáng và trưa</a>
					</p>
					<p>
						<a class="dark-grey-text" href="/View/Offers/massage.php">Relieve Stress </a>
					</p>
				</div>

				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					<h6 class="text-uppercase font-weight-bold">Phòng</h6>
					<hr style="height: 10px;border: 0;	box-shadow: 0 10px 10px -10px #8c8b8b inset;" />

					<p>
						<a class="dark-grey-text" href="/View/room.php">Xem thông tin phòng</a>
					</p>
					<p>
						<a class="dark-grey-text" href="/View/booking.php">Đặt phòng</a>
					</p>
					<p>
						<a class="dark-grey-text" href="/View/rulebooking.php">Quy định đặt phòng</a>
					</p>
					<p>
						<a class="dark-grey-text" href="/View/about.php#otherRule.php">Nội quy khách sạn</a>
					</p>
				</div>

				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					<h6 class="text-uppercase font-weight-bold">Contact</h6>
					<hr style="height: 10px;border: 0;	box-shadow: 0 10px 10px -10px #8c8b8b inset;" />
					<p><i class="fas fa-home mr-3"></i> 146 Nguyễn Huệ, District 1, HCM</p>
					<p><i class="fas fa-envelope mr-3"></i> info@thedreamerhotel.com</p>
					<p><i class="fas fa-phone mr-3"></i> + 09 38 516 875</p>
					<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
				</div>
			</div>
		</div>
		<!-- Footer Links -->

		<!-- Copyright -->
		<div class="footer-footer container-fluid d-flex justify-content-around py-3">
			<div class="footer-footer-name" style="font-family:'Courier New', Courier, monospace">
				© 2019. Power by Khách sạn Người Mơ
			</div>
			<div class="footer-footer-logo">
				<!-- Facebook -->
				<a class="">
					<i class="fab fa-facebook " style="font-size: 1em; color: navy;"></i>
				</a>
				<a class="">
					<i class="fab fa-instagram" style="font-size: 1em; color: red"></i>
				</a>

				<a class="">
					<i class="fab fa-twitter" style="font-size: 1em; color: skyblue;"></i>
				</a>


			</div>
		</div>
	</footer>
	<!-- Footer -->

	<!-- button scroll top -->

	<button id="button-scroll-top" style="scroll-behavior: initial;">
		<i class="fas fa-chevron-up"></i>
	</button>
	<!-- button scroll top -->

	<script src="js/app.js">

	</script>
	<script src="plugins/jquery-datepicker/jquery-ui.js"></script>

	<!-- pooper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
	</script>
	<!-- bootstrap js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkOWuntBVPS7_vKlyvj3oCRCGc6OJUJPc&callback=myMap">
	</script>
</body>

<script>
	$("document").ready(function () {
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function () {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "0";
			} else {
				document.getElementById("navbar").style.top = "-50px";
			}
			prevScrollpos = currentScrollPos;
			if (window.pageYOffset > 700) {
				$('#navbar').css('background-color', 'rgba(0,0,0,0.5)');
			} else {
				$('#navbar').css('background-color', 'initial');
			}
			console.log(window.pageYOffset);
		}
		$(function () {
			$.datepicker.setDefaults(
				$.extend($.datepicker.regional[''])
			);
			$(".datepicker").datepicker("option", "showAnim", 'slideDown');
			$(".datepicker").datepicker("option", "dateFormat", 'dd mm yy');
			$(".datepicker").datepicker("option", "showOtherMonths", 'true');
			$(".datepicker").datepicker("option", "selectOtherMonths", 'true');
			$(".datepicker").datepicker("option", "minDate", '0');
			$(".datepicker").datepicker("option", "maxDate", '+1M');
		});
	});
</script>


</html>