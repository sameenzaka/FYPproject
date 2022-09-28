<?php 
ob_start();
include "connection.php";
session_start();
if(!isset($_SESSION['seller-login']))
header('location: seller-login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Seller</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">-->
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">






	<!-- <link href="assets/libs/chartist/chartist.min.css" rel="stylesheet"> -->
	<!-- Bootstrap Css -->
	<!-- <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"> -->
	<!-- Icons Css -->
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
	<!-- App Css-->
	<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">


	<!--Form CSS-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body class="app">
	<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
									role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div>
						<!--//col-->
						<div class="search-mobile-trigger d-sm-none col">
							<i class="search-mobile-trigger-icon fas fa-search"></i>
						</div>
						<!--//col-->
						<!-- <div class="app-search-box col">
							<form class="app-search-form">
								<input type="text" placeholder="Search..." name="search"
									class="form-control search-input">
								<button type="submit" class="btn search-btn btn-primary" value="Search"><i
										class="fas fa-search"></i></button>
							</form>
						</div> -->
						<!--//app-search-box-->

						<div class="app-utilities col-auto">

							<!--//app-utility-item-->
							<div class="app-utility-item">
								<a href="#" title="Settings">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
										<path fill-rule="evenodd"
											d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
									</svg>
								</a>
							</div>
							<!--//app-utility-item-->
							<?php
							$sql = "SELECT * FROM seller where seller_id =".$_SESSION["seller-login"];
							$result = mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0){
							while($row=mysqli_fetch_assoc($result)){
  							?>
							<div class="app-utility-item app-user-dropdown dropdown">
								<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
									role="button" aria-expanded="false"><img src="seller-profile/<?php echo $row["image"];?>"
										alt="user profile"></a>
								<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
									<li><a class="dropdown-item" href="#">Account</a></li>

									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="seller-logout.php">Log Out</a></li>
								</ul>
							</div>
							<!--//app-user-dropdown-->
						</div>
						<!--//app-utilities-->
						<?php }} ?>
					</div>
					<!--//row-->
				</div>
				<!--//app-header-content-->
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column" style="background-color: #f8b425;">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/app-logo.svg"
							alt="logo"><span class="logo-text">Seller Panel</span></a>

				</div>
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link active" href="index.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
										<path fill-rule="evenodd"
											d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
									</svg>
								</span>
								<span class="nav-link-text">Personal Profile</span>							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->

						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="add-house.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
										<path fill-rule="evenodd"
											d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
										<circle cx="3.5" cy="5.5" r=".5" />
										<circle cx="3.5" cy="8" r=".5" />
										<circle cx="3.5" cy="10.5" r=".5" />
									</svg>
								</span>
								<span class="nav-link-text">Add House</span>							</a>
							<!--//nav-link-->
						</li>
					
						<!--//nav-item-->


						
                        <li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link " href="add-plot.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
										<path fill-rule="evenodd"
											d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
										<circle cx="3.5" cy="5.5" r=".5" />
										<circle cx="3.5" cy="8" r=".5" />
										<circle cx="3.5" cy="10.5" r=".5" />
									</svg>
								</span>
								<span class="nav-link-text">Add Plot</span>							</a>
							<!--//nav-link-->
						</li>



						<!--//nav-item-->
					</ul>
					<!--//app-menu-->
				</nav>
				<!--//app-nav-->


			</div>
			<!--//sidepanel-inner-->
		</div>
		<!--//app-sidepanel-->
	</header>
	<!--//app-header-->


<?php

$action = "update";
if(isset($_REQUEST["action"]))
$action =$_REQUEST["action"];

if($_POST){

$sellername = $_POST["seller_name"];
$selleremail = $_POST["seller_email"];
$sellerphone = $_POST["seller_phone"];
$sellercnic = $_POST["seller_cnic"];
$sellerpass = $_POST["seller_pass"];
$selleraddress = $_POST["seller_address"];
$sellercity = $_POST["seller_city"];
$sellerzip = $_POST["seller_zip"];

if($action == "update"){

$sql = "UPDATE seller set seller_name='".$sellername."' ,seller_email='".$selleremail."' ,seller_phone='".$sellerphone."',seller_cnic='".$sellercnic."' ,seller_pass='".$sellerpass."' ,seller_address='".$selleraddress."' ,seller_city='".$sellercity."' ,seller_zip='".$sellerzip."' WHERE seller_id=".$_SESSION["seller-login"];

$data = mysqli_query($conn,$sql);
?>
<script>alert("Edit Done");</script>
<?php  
}
}


if($action=="update"){
$sql = "SELECT * FROM seller WHERE seller_id=".$_SESSION["seller-login"];
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
}

?>




<br>	
	<div class="container" style="max-width: 700px ; width: 100% ; padding: 25px 30px ; border-radius: 25px ; background: linear-gradient(135deg, #dcdcdc, #f8b425);">
	<div class="heading" style="font-size: 25 ; font-weight: 500 ; position: relative ; text-align: center ; padding: 0 0 20px 0;">Your Profile</div>
		
		
		<?php
		$sql = "SELECT * FROM seller where seller_id =".$_SESSION["seller-login"];
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
  		?>
		<form action="" method="post" enctype="multipart/form-data" >
			<div class="card-details">
				
				
				<div class="card-box">
					<span class="details">NAME</span>
					<input name="seller_name" type="text" value="<?php echo $row["seller_name"]; ?>" />
				</div>


				<div class="card-box">
					<span class="details">Email</span>
					<input type="email" name="seller_email" id="seller_email" value="<?php echo $row["seller_email"]; ?>" />
				</div>


				<div class="card-box">
					<span class="details">Phone Number</span>
					<input type="phoneno." name="seller_phone" id="seller_phone" value="<?php  echo $row["seller_phone"]; ?>">
				</div>


				<div class="card-box">
					<span class="details">CNIC No.</span>
					<input type="numbers" name="seller_cnic" id="seller_cnic" value="<?php  echo $row["seller_cnic"]; ?>">
				</div>


				<div class="card-box">
					<span class="details">Password</span>
					<input type="password" name="seller_pass" id="seller_pass" value="<?php  echo $row["seller_pass"]; ?>">
				</div>


					
				<div class="card-box">
					<span class="details">Adress</span>
					<input type="text" name="seller_address" id="seller_address" value="<?php  echo $row["seller_address"]; ?>">
				</div>


				<div class="card-box">
					<span class="details">City</span>
					<input type="text"  name="seller_city" id="seller_city" value="<?php  echo $row["seller_city"]; ?>">
				</div>


				<div class="col-md-2 card-box">
					<span class="details" >ZIP</span>
					<input type="text" name="seller_zip" id="seller_zip" value="<?php  echo $row["seller_zip"]; ?>" >
				  </div>

			</div>



			


<div class="button">
	<input type="submit" value="Edit">
</div>

		</form>
	</div>

<?php }}?>
			

			









	<!-- <script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/metismenu/metisMenu.min.js"></script>
 -->





	<!-- Plugin Js-->
	<!-- <script src="assets/libs/chartist/chartist.min.js"></script>
	<script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

	<script src="assets/js/pages/dashboard.init.js"></script>
 -->


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>



	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>