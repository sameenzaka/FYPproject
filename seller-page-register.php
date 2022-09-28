<?php 
include "connection.php";
ob_start();
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Seller-Register</title>
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

$sellername = $_POST["seller_name"];
$selleremail = $_POST["seller_email"];
$sellerphone = $_POST["seller_phone"];
$sellercnic = $_POST["seller_cnic"];
$sellerpass = $_POST["seller_pass"];
$selleraddress = $_POST["seller_address"];
$sellercity = $_POST["seller_city"];
$sellerzip = $_POST["seller_zip"];
$image = $_FILES['file']['name'];

if($action == "add"){

$sql = "INSERT INTO seller (seller_name , seller_email , seller_phone , seller_cnic , seller_pass , seller_address , seller_city , seller_zip , image) VALUES('$sellername' , '$selleremail' , '$sellerphone' , '$sellercnic' , '$sellerpass' , '$selleraddress' , '$sellercity' , '$sellerzip' , '$image')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($result){
header("location: seller-login.php");
}
else{
echo "Not Inserted";
}


if(isset($_POST["submit"])){
if(move_uploaded_file($_FILES['file']['tmp_name'] , "C:/xampp/htdocs/abdullah-new/seller/seller-profile/".$_FILES['file']['name'])){
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
                                    <a class="text-center" href="seller-page-register.php"> <h4 class="text-white">REGISTER YOURSELF</h4></a>
        
                                <form action="" method="POST" class="mt-5 mb-5 login-input" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input name="seller_name" type="text" class="form-control bg-white "  placeholder="  Name" required> 
                                    </div>
									<div class="form-group">
                                        <input name="seller_email" type="email" class="form-control bg-white"  placeholder="  Email" required>
                                    </div>
									<div class="form-group">
                                        <input name="seller_phone" type="text" class="form-control bg-white"  placeholder="  phone" required>
                                    </div>
									<div class="form-group">
                                        <input name="seller_cnic" type="text" class="form-control bg-white"  placeholder="  CNIC" maxlength="13" required>
                                    </div>
									<div class="form-group">
                                        <input name="seller_pass" type="password" class="form-control bg-white" placeholder="  Password" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input name="seller_address" type="text" class="form-control bg-white" placeholder="  Address" required>
                                    </div>
									<div class="form-group">
                                        <input name="seller_city" type="text" class="form-control bg-white" placeholder="  City" required>
                                    </div>
									<div class="form-group">
                                        <input name="seller_zip" type="text" class="form-control bg-white" placeholder="  Zip Code" required>
                                    </div>
									<div class="form-group">
                                        <input name="file" type="file" class="form-control" placeholder="file" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" id="submit" name="submit" type="submit">Submit</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="seller-login.php" class="text-primary">Login In </a> now</p>
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
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





