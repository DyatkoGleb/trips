<?php require_once "index1.php"?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Taxa Adventure</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <?php if(!isset($_SESSION['username'])){?>

                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <?php }else {echo "<p style='color: white'>Hi ".$_SESSION['username']."</p>";}?>
					<!-- Collect the nav links, forms, and other content for toggling -->

				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content">
						<p>Plan a trip to Santorini Village</p>
						<h2>Taxa Adventure</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Trip Package Area =================-->
	<section class="package-area section_gap_top">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="ol-lg-12">
					<div class="main_title">
						<p>We’re Offering these Trip Packages</p>
						<h1>Famous Trips Packages</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
                <?php
                $database = new MongoDB\Client('mongodb+srv://osminojka:RKICsi2Ca63OGRvw@cluster0.0gnd0.mongodb.net/trips?retryWrites=true&w=majority');
                $trips = get_trips($database);
                foreach ($trips as $item):
                    $item = (array)$item;
                    $date = new DateTime($item['date']);?>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<div class="thumb">
							<img class="img-fluid" src="img/package/<?= 'p1.jpg'?>" alt="">
						</div>
						<p class="date"><span><?= $date->format('j');?>
                            </span> <br> <?=$date->format('F');?> </p>
						<div class="meta-top d-flex">
							<p><span class="fa fa-location-arrow"></span> <?= $item['place']?></p>
							<p class="ml-20"><span class="fa fa-calendar"></span> <?= $item['time']?></p>
						</div>
						<h4><?= $item['name']?></h4>
						<p>
                            <?= $item['disc']?>
						</p>
					</div>
				</div>
                <?php endforeach;?>
			</div>
		</div>	
	</section>
	<!--================ End Trip Package Area =================-->

	<!--================ Start Popular Places Area =================-->
	<section class="popular-places-area section_gap_bottom">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="main_title">
						<p>We’re Offering these Trip Packages</p>
						<h1>Popular Places Around the World</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="popular-places-slider owl-carousel">
            <?php $famous_places = get_famous_place($database); foreach ($famous_places as $item):?>
			<a href="img/places/<?= $item['pict']?>" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="img/places/<?= $item['pict']?>" alt="">
				</div>
				<div class="popular-places-text">
					<p><?= $item['name']?></p>
					<h4>
                        <?= $item['desc']?>
					</h4>
				</div>
			</a>
            <?php endforeach;?>

		</div>
	</section>
	<!--================ End Popular Places Area =================-->

	<!--================Team Area =================-->
	<section class="team_area">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="main_title">
						<p>We’re Offering these Trip Packages</p>
						<h1>Intelligent Team Members</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row team_inner">
                <?php $team_members = get_team_member($database); foreach ($team_members as $item):?>
				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid w-100" src="img/team/<?= $item['pict']?>" alt="">
							<div class="hover">
								<h4><?= $item['name']?></h4>
								<p><?= $item['disc']?></p>
							</div>
						</div>
					</div>
				</div>
                <?php endforeach;?>
			</div>
		</div>
	</section>
	<!--================End Team Area =================-->

	<!--================ Start Testimonials Area =================-->
	<section class="testimonials-area section_gap">
		<div class="container">
			<div class="testi-slider owl-carousel" data-slider-id="1">
                <?php $items = get_comment($database); foreach ($items as $item):?>
				<div class="item">
					<div class="testi-item">
						<img src="img/quote.png" alt="">
						<h4><?= $item['name'] ?></h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
                                <?= $item['desc'] ?>
							</p>
						</div>
					</div>
				</div>
                <?php endforeach;?>

			</div>
			<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                <?php $items = get_comment($database); foreach ($items as $item):?>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid rounded-circle" src="img/testimonial/<?= $item['pict']?>" alt="">
					</div>
					<div class="overlay overlay-grad "></div>
				</div>
                <?php endforeach;?>

			</div>
		</div>
	</section>
	<!--================ End Testimonials Area =================-->

	<!--================  Start Footer Area =================-->
	<footer class="footer-area">
		<div class="footer_top section_gap_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-3 col-sm-3">
						<div class="single-footer-widget">
							<h5 class="footer_title">About Agency</h5>
							<p class="about-text">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are used more to </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>