<?php
require_once("../Controller/checkSignin.php");
?>
<style>
    h1 {
        font-family: 'Raleway', sans-serif;
    }

    .col-center {
        margin: 0 auto;
        float: none !important;
    }

    .carousel {
        margin: 30px auto 60px;
        padding: 0 80px;
    }

    .carousel .item {
        text-align: center;
        overflow: hidden;
    }

    .carousel .item h4 {
        font-family: 'Varela Round', sans-serif;
    }

    .carousel .item img {
        max-width: 100%;
        display: inline-block;
    }

    .carousel .item .btn {
        border-radius: 0;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: bold;
        border: none;
        background: #a177ff;
        padding: 6px 15px;
        margin-top: 5px;
    }

    .carousel .item .btn:hover {
        background: #8c5bff;
    }

    .carousel .item .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }

    .carousel .thumb-wrapper {
        margin: 5px;
        text-align: left;
        /* background: #fff; */
        /* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1); */
    }

    .carousel .thumb-content {
        padding: 15px;
        font-size: 13px;
        color: black;
    }

    .carousel .carousel-control {
        height: 44px;
        width: 44px;
        margin: auto 0;
        border-radius: 50%;
        border: 3px solid rgba(0, 0, 0, 0.8);
        color: black !important;
    }

    .carousel .carousel-control i {
        font-size: 50px;
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        /* color: red; */
        font-weight: bold;
    }

    .carousel .carousel-control.left i {
        margin-left: -3px;
    }

    .carousel .carousel-control.right i {
        margin-right: -3px;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 20px;
        border-radius: 50%;
        margin: 4px;
        border-color: transparent;
    }

    .carousel-indicators li {
        background: #ababab;
    }

    .carousel-indicators li.active {
        background: #555;
    }

    h2 {
        border-left: 10px solid #0984e3;
        background: #dfe6e9;
        color: #2d3436;
        font-family: 'Montserrat', sans-serif;
        padding: 5px;
        margin-top: 15px;
    }
</style>
<div class="container-fluid" id="thebody">
    <h1 class="text-center">THE DREAMER HOTEL</h1>
    <br>
    <!-- order -->
    <div class="orders">
        <h2>Quản lý đơn đặt phòng</h2>
        <h4 class="text-center  "><a class="text-warning" href="" id="otherRoom"> Xem thông tin lượt đặt phòng </a><i class="fas fa-hacker-news text-danger"></i>
        </h4>
    </div>
    <!-- /order -->

    <div class="rooms">
        <h2>Quản lý phòng khách sạn</h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Phòng đơn</h5>
                    <small>300$</small>
                </div>
                <p class="mb-1"><img class="img-thumbnail w-25" src="/Image/phongdon1.jpg" alt=""></p>
                <small>
					<small hidden>
						<?php
						require_once("../conn.php");
						$sql = "SELECT id FROM room WHERE brand='singleroom'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
						
						?>		
								<tr class="item">
									<td><?php echo $row["id"]?></td>	
								</tr>
						<?php 
							}
						}
						?>
					</small>
					Còn <?= $result->num_rows?> phòng
				</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Phòng đôi</h5>
                    <small>500$</small>
                </div>
                <p class="mb-1"><img class="img-thumbnail w-25" src="/Image/phongdoi1.jpg" alt=""></p>

                <small>
					<small hidden>
						<?php
						require_once("../conn.php");
						$sql = "SELECT id FROM room WHERE brand='doubleroom'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
						
						?>		
								<tr class="item">
									<td><?php echo $row["id"]?></td>	
								</tr>
						<?php 
							}
						}
						?>
					</small>
					Còn <?= $result->num_rows?> phòng
				</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Phòng tập thể</h5>
                    <small>900$</small>
                </div>
                <p class="mb-1"><img class="img-thumbnail w-25" src="/Image/phongtapthe1.jpg" alt=""></p>

                <small>
					<small hidden>
						<?php
						require_once("../conn.php");
						$sql = "SELECT id FROM room WHERE brand='quadrupleroom'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
						
						?>		
								<tr class="item">
									<td><?php echo $row["id"]?></td>	
								</tr>
						<?php 
							}
						}
						?>
					</small>
					Còn <?= $result->num_rows?> phòng
				</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Phòng King</h5>
                    <small>1200$</small>
                </div>
                <p class="mb-1"><img class="img-thumbnail w-25" src="/Image/phongking1.jpg" alt=""></p>

                <small>
					<small hidden>
						<?php
						require_once("../conn.php");
						$sql = "SELECT id FROM room WHERE brand='kingroom'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
						
						?>		
								<tr class="item">
									<td><?php echo $row["id"]?></td>	
								</tr>
						<?php 
							}
						}
						?>
					</small>
					Còn <?= $result->num_rows?> phòng
				</small>
            </a>
        </div>
    </div>

    <div class="accounts">
        <h2>Quản lý tài khoản</h2>
        <h4 class="text-center  "><a class="text-info" id="otherAccount" href=""> Xem thông tin tài khoản hiện có
            </a><i class="fas fa-hacker-news text-danger"></i>
        </h4>
    </div>

    <div class="offers">
        <h2>Quản lý ưu đãi</h2>

        <h4 class="text-center  "><i class="fas fa-kiwi-bird"></i><a class="text-black-50" id="otherOffer" href="">
                Xem các ưu đãi hiện có
            </a><i class="fas fa-kiwi-bird"></i>
        </h4>


    </div>


    <div class="manages">
        <h2>Thống kê thu nhập</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">Tổng số lượt đặt phòng</th>
                        <th scope="col">Thu nhập</th>
                    </tr>
                </thead>
                <tbody>
              
                    <?php
						require_once("../conn.php");
						$sql = "SELECT SUM(price), COUNT(id_info) FROM info";
						$result = $conn->query($sql);
						$data = mysqli_fetch_row($result);
						//print_r($data);
						if ($result->num_rows > 0) {
							$sum = $data[0];
							$count = $data[1];
						?>		
								<tr class="item">
									<td><?php echo $count?></td>	
									<td><?php echo $sum?>$</td>	
								</tr>
						<?php 
							
						}
						?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $("#otherRoom").click(function (e) {
        e.preventDefault();
        $("#manage-order").click();
    });
    $("#otherAccount").click(function (e) {
        e.preventDefault();
        $("#manage-account").click();
    });
    $("#otherOffer").click(function (e) {
        e.preventDefault();
        $("#manage-offer").click();
    });
</script>