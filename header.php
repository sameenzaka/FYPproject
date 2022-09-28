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
	<link rel="stylesheet" href="css/custom.css">
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" media="all">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
	<link rel="stylesheet" href="css/slick.min.css">
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
				<img src="images/logo.jpg" width="70" height="70" class="d-inline-block align-center" alt="">
				<span class="purple-600"><em>PROPER MARKETING</em></span>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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

					<?php if (isset($_SESSION["buyer-login"])) { ?>

						<li class="nav-item">
							<span class="dropdown">
								<a class="dropdown-toggle pt-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

									<?php
									echo $_SESSION["user_name"];
									?>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<!-- <a class="dropdown-item" href="#">Profile</a> -->
									<a class="dropdown-item" href="buyer-logout.php">Logout</a>
								</div>
							</span>

						</li>
						<!-- <li class="nav-item"><a href="buyer-logout.php" class="nav-link ml-lg-2">
								<span class="icon-user"></span> Log Out</a></li> -->
					<?php } else { ?>
						<li class="nav-item"><a href="buyer-login.php" class="nav-link ml-lg-2">
								<span class="icon-user"></span> Sign-In (Buyer)</a></li>
						<li class="nav-item"><a href="../agent/agent-login.php" class="nav-link ml-lg-2">
								<span class="icon-user"></span> Sign-In (Agent)</a></li>
						<li class="nav-item"><a href="../seller/seller-login.php" class="nav-link ml-lg-2">
								<span class="icon-user"></span> Sign-In (seller)</a></li>
					<?php } ?>
					<!-- <li class="nav-item "><a href="buyer-page-register.php" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li> -->

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->