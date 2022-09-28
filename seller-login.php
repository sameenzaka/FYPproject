<?php 
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Seller-Register</title>
    <!-- Favicon icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    <style>
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: red;
}
    </style>
    
</head>

<body class="h-100">
    
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
if(isset($_SERVER["REQUEST_METHOD"]));
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["seller_name"];
$password = $_POST["seller_pass"];

$sql = mysqli_query($conn , "select * from seller where seller_cnic = '$name' and seller_pass = '$password'");
$row = (mysqli_fetch_array($sql));
if(isset($row['seller_name']) == $name && (isset($row["seller_pass"]) == $password) ){
echo "Login successful <br> Welcome " . $row["s_name"];

$_SESSION["seller-login"] = $row["seller_id"];
if(isset($_SESSION["seller-login"])){
header('location:index.php');
}
}
else{
?>
<script> alert("Login Unsuccessful"); </script>  
<?php
//echo "<h2 style='color:blue;'> <center> Login Failed </center> </h2>";
}
}

?>	

<section class="vh-100 gradient-custom " style=" background-image: url('a.jpg');  background-size: 100%; background-repeat:repeat; background-attachment: scroll;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card text-white" style="border-radius: 1rem;background-color:rgba(0, 0, 0, 0.6);">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
                  <form action="" method="POST" class="" enctype="multipart/form-data">
                      <h2 class="fw-bold mb-2 text-uppercase">Seller Login</h2>
                      <p class="text-white-50 mb-5">Please enter your login and password!</p>
                      
                      <div class="form-outline form-white mb-4">
                          <input name="seller_name"  class="form-control form-control-lg"  placeholder="Enter Your CNIC" required  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "13">
                        <label class="form-label" for="typeEmailX">CNIC</label>
                    </div>
                    
                    <div class="form-outline form-white mb-4">
                      <input name="seller_pass" type="password" class="form-control form-control-lg" placeholder="Password" required>
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
                    
                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
                    
                    <button class="btn btn-outline-light btn-lg px-5" id="submit" name="submit" type="submit">Login</button>
</form>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>
      
                  <div>
                      <p class="mb-0">Don't have an account? <a href="seller-page-register.php" class="text-white-50 fw-bold">Register Yourself</a>
                      </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>


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





