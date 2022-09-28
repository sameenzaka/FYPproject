<?php
session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Abdullah Estate</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bg.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="top">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p class="social d-flex">
						<a href="#"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-twitter"></span></a>
						<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<a href="tel:+92 300 1234567">
						<span class="icon-phone"></span>
						<span>+92 300 1234567</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo-removebg-preview.png" width="50" height="50" class="d-inline-block align-center"
					alt="">
				<span class="purple-600"><em>ABDULLAH ESTATE</em></span>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="property.php" class="nav-link">Property</a></li>
					<li class="nav-item"><a href="agents.php" class="nav-link">Agents</a></li>
					<li class="nav-item"><a href="index.php#expert_section" class="nav-link">Expert Guide</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<?php if(isset($_SESSION["buyer-login"])){ ?>
					<li class="nav-item"><a href="buyer-logout.php" class="nav-link ml-lg-2">
					<span class="icon-user"></span> Log Out</a></li>
					<?php }else{?>
					<li class="nav-item"><a href="buyer-login.php" class="nav-link ml-lg-2">
					<span class="icon-user"></span> Sign-In</a></li>
					<?php }?>
					<li class="nav-item "><a href="buyer-page-register.php" class="nav-link"><span
								class="icon-pencil"></span> Sign-Up</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap" style="background-image: url('images/slides-galleria4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>FAQ Term & Policy</span></p>
            <h1 class="mb-3 bread">FAQ Term & Policy</h1>
          </div>
        </div>
      </div>
    </div>

	<section class="ftco-section ftc-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about1.jpg);">					
				</div>
				<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
		  <div class="heading-section heading-section-wo-line mb-5 pl-md-5">
			  <div class="pl-md-5 ml-md-5">
				<h2 class="mb-4">FAQ Term & Policy</h2>
			</div>
		  </div>
		  <div class="col-md">
          <div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:white;">
						First Question
					</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<strong>This is the first item's accordion body.</strong>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.e <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
					</div>
				</div>
				<br>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button collapsed bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:white;">
						Second Question
					</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					<div class="accordion-body">					
					<strong>This is the first item's accordion body.</strong>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.e <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
					</div>
				</div>
				<br>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
					<button class="accordion-button collapsed bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:white;">
						Third Question
					</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						
					<strong>This is the first item's accordion body.</strong>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.e <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
					</div>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</section>
		
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php 
include "footer.php";

?>