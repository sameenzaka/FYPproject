<?php 
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Abdullah States | Agent</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="../agent/favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="../agent/assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="../agent/assets/css/portal.css">


	<!--Form CSS-->
	<link rel="stylesheet" type="text/css" href="../agent/styles.css">



	<style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background: linear-gradient(135deg, #dcdcdc, #f8b425);
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

      .row{
            display: flex;
            flex-wrap: wrap;
        }
	
	
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }

		table th{
			text-align: center;
		}
    </style>

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
						<div class="app-search-box col">
							<form class="app-search-form">
								<input type="text" placeholder="Search..." name="search"
									class="form-control search-input">
								<button type="submit" class="btn search-btn btn-primary" value="Search"><i
										class="fas fa-search"></i></button>
							</form>
						</div>
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
							$sql = "SELECT * FROM agent where id =".$_SESSION["admin-login"];
							$result = mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0){
							while($row=mysqli_fetch_assoc($result)){
  							?>
							<div class="app-utility-item app-user-dropdown dropdown">
								<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
									role="button" aria-expanded="false"><img src="../admin-panel/agent-profile/<?php echo $row["image"];?>"
										alt="user profile"></a>
								<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
									<li><a class="dropdown-item" href="#">Account</a></li>
									
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="../agent/admin-logout.php">Log Out</a></li>
								</ul>
							</div>
							<!--//app-user-dropdown-->
						</div>
						<!--//app-utilities-->
						<?php }}?>
					</div>
					<!--//row-->
				</div>
				<!--//app-header-content-->
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column" style="background-color: #f8b425;">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="../agent/index.php"><img class="logo-icon me-2" src="../agent/assets/images/app-logo.svg"
							alt="logo"><span class="logo-text">Agent Panel</span></a>

				</div>
				<!--//app-branding-->
				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						
						
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link active" href="../admin-panel/report-print-admin.php">
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
								<span class="nav-link-text">Report</span>
							</a>
							<!--//nav-link-->
						</li>                   
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="report-display.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
									</svg>
								</span>
								<span class="nav-link-text">Report Display</span>
							</a>
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

$action = "add";
if(isset($_REQUEST["action"]))
$action = $_REQUEST["action"];

$now = $_GET["printid"];
?>
	

		<div class="container" style="margin-left: 20%;" id="tblCustomers"> 
			<div class="brand-section">
				<div class="row">
					<div class="col-6">
						<img src="../agent/assets/images/logo.png" style="width: 80px; margin: left 50px; ;">
						<img src="../agent/assets/images/logo-1.jpeg" style="width: 40%; margin: left 50px; ">
					
					</div>
					<div class="col-6">
						<div class="company-details">
							<p class="text-white">abdullahstate@gmail.com</p>
							<p class="text-white">assdad asd asd</p>
							<p class="text-white">+92 3004507598</p>
						</div>
					</div>
				</div>
			</div>
	<?php 
	if($action == "print"){
	$sql = "SELECT * FROM invoice c inner join seller s on c.seller_id = s.seller_id WHERE invoice_id="."$now";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
	?>
		
			<div class="body-section">
				<div class="row" >
					<div class="col-6 flex d-inline-block">
						<h2 class="heading">Invoice:&nbsp;&nbsp;&nbsp;<?php echo $now;?></h2>
						<span ></span>
						<p class="sub-heading">Seller Name:&nbsp;&nbsp;&nbsp;<?php echo $row["seller_name"];?> </p>						
						<p class="sub-heading">Email Address:&nbsp;&nbsp;&nbsp;<?php echo $row["seller_email"];?>  </p>
						<p class="sub-heading">Seller Phone no:&nbsp;&nbsp;&nbsp;<?php echo $row["seller_phone"];?></p>
						<p class="sub-heading">Date:&nbsp;&nbsp;&nbsp;<?php echo $row["date"];?></p>
					</div>
<?php 
$sql = "SELECT * FROM invoice c inner join buyer s on c.buyer_id = s.buyer_id WHERE invoice_id="."$now";
$result = mysqli_query($conn,$sql);
while($row1=mysqli_fetch_assoc($result)){
?>
					<div class="col-6"><br>
						<p class="sub-heading">Buyer Name:&nbsp;&nbsp;&nbsp;<?php echo $row1["buyer_name"];?></p>
<?php }?>						
						<p class="sub-heading">Buyer Address:&nbsp;&nbsp;&nbsp;<?php echo $row["buyer_address"];?></p>
						<p class="sub-heading">Phone Number:&nbsp;&nbsp;&nbsp;<?php echo $row["buyer_phone"];?></p>
						<p class="sub-heading">City,State,Pincode:&nbsp;&nbsp;&nbsp;<?php echo $row["city"];?></p>
					</div>
				</div>
			</div>
	
			<div class="body-section">
				<h3 class="heading">Property</h3>
				<br>
				<table class="table-bordered"  cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th class="w-10">Property Type</th>
							<th class="w-11">Area & Address</th>
							<th class="w-13">Price</th>
							<th class="w-14">Agent Commission</th>
							<th class="w-15">Buyer Paid</th>
							
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $row["property_type"];?> </td>
							<td><?php echo $row["area"];?></td>
							<td><?php echo $row["price"];?></td>
							<td><?php echo $row["agent_commission"];?></td>
							<td><?php echo $row["buyer_paid"];?></td>
						</tr>		
					</tbody>
				</table>
				<br>
				<h3 class="heading">Payment Status: <?php echo $row["payment_status"];?></h3>
			</div>
	
			<div class="body-section">
				<p>&copy; Copyright 2022 - abdullahstate. All rights reserved. 
					<a href="https://www.fundaofwebit.com/" class="float-right">www.abdullahstates.com</a>
				</p>
			</div>
			<?php }}}?>  
		</div>    

		<div class="container" style="margin: 50px  0px  50px 700px ">
		<input type="submit" id="btnExport" name="submit" value="Print PDF"/>
	</div>
	
</form>


	<!-- Javascript -->
	<script src="../agent/assets/plugins/popper.min.js"></script>
	<script src="../agent/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>




<script type="text/javascript">
	$("body").on("click", "#btnExport", function () {
		html2canvas($('#tblCustomers')[0], {
			onrendered: function (canvas) {
				var data = canvas.toDataURL();
				var docDefinition = {
					content: [{
						image: data,
						width: 500
					}]
				};
				pdfMake.createPdf(docDefinition).download("Property Invoice.pdf");
			}
		});
	});
</script>




	<!-- Page Specific JS -->
	<script src="../agent/assets/js/app.js"></script>

</body>

</html>