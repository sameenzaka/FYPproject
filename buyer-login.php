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
    <title>Buyer-Register</title>
    <!-- Favicon icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
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
$name = $_POST["buyer_name"];
$password = $_POST["buyer_pass"];

$sql = mysqli_query($conn , "select * from buyer where buyer_name = '$name' and buyer_pass = '$password'");
$row = (mysqli_fetch_array($sql));
if(isset($row['buyer_name']) == $name && (isset($row["buyer_pass"]) == $password) ){
echo "Login successful <br> Welcome " . $row["customer_name"];

$_SESSION["buyer-login"] = $row["buyer_id"];
if(isset($_SESSION["buyer-login"])){
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
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
      
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="buyer_name" id="typeEmailX" class="form-control form-control-lg" />
                        <label class="form-label" for="typeEmailX">Name</label>
                    </div>
                    
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="buyer_pass" id="typePasswordX" class="form-control form-control-lg" />
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
                      <p class="mb-0">Don't have an account? <a href="buyer-page-register.php" class="text-white-50 fw-bold">Sign Up</a>
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
    <script src="js1/custom.min.js"></script>
    <script src="js1/settings.js"></script>
    <script src="js1/gleek.js"></script>
    <script src="js1/styleSwitcher.js"></script>
</body>
</html>





