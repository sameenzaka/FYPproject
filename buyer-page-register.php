<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Buyer-Register</title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    
</head>

<body class="h-100" style=" background-image: url('a.jpg');  background-size: 100%; background-repeat:repeat; background-attachment: scroll;">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

<?php

$action = "add";
if(isset($_REQUEST["action"]))
$action =$_REQUEST["action"];

if($_POST){

$buyername = $_POST["buyer_name"];
$buyerpass = $_POST["buyer_pass"];
$buyeremail = $_POST["buyer_email"];
$buyeraddress = $_POST["buyer_address"];
$buyercnic = $_POST["buyer_CNIC"];
$image = $_FILES['file']['name'];

if($action == "add"){

$sql = "INSERT INTO buyer (buyer_name , buyer_pass , buyer_email , buyer_address , image, buyer_cnic) VALUES('$buyername' , '$buyerpass' , '$buyeremail' , '$buyeraddress' , '$image','$buyercnic')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));





if($result){
?>
<script> alert("Data Added");</script>

<?php
header('location:buyer-login.php');
}
else{
echo "Not Inserted";
}

// For Image:

if(isset($_POST["submit"])){
if(move_uploaded_file($_FILES['file']['tmp_name'] , "C:/xampp/htdocs/abdullah-new/abdullah-estate/buyer-profile/".$_FILES['file']['name'])){
echo "";
}
else{
echo "Not Uploaded";
}
}
} 
}

?>

    <div class="h-100 ">
        <div class="container h-100 ">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content ">
                        <div class="card text-white p-3"style="background-color:rgba(0, 0, 0, 0.6);">
                                    <a class="text-center" href="buyer-login.php"> <h4 class="text-white">REGISTER YOURSELF</h4></a>
        
                                <form action="" method="POST" class="mt-5 mb-5 login-input" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input name="buyer_name" type="text" class="form-control bg-white"  placeholder=" Name" required> 
                                    </div>
									<div class="form-group">
                                        <input name="buyer_pass" type="password" class="form-control bg-white" placeholder=" Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="buyer_email" type="email" class="form-control bg-white"  placeholder=" Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="buyer_address" type="text" class="form-control bg-white" placeholder=" Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="buyer_CNIC" type="text" class="form-control bg-white" placeholder=" CNIC" required>
                                    </div>
									<div class="form-group">
									<input id="file" name="file" type="file" class="form-control text-white">
                                    </div>
                                    <button class="btn btn-outline-secondary btn-lg px-5 text-white" id="submit" name="submit" type="submit">Submit</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="buyer-login.php" class="text-primary">Login In </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js1/custom.min.js"></script>
    <script src="js1/settings.js"></script>
    <script src="js1/gleek.js"></script>
    <script src="js1/styleSwitcher.js"></script>
</body>
</html>





