<?php 
include "header.php";

$updated="false";
if($_POST){
  $buyername = $_POST["name"];
  $buyeremail = $_POST["email"];
  $buyeraddress = $_POST["address"];
  $buyercnic=$_POST["cnic"];
  $sql = "UPDATE buyer set buyer_name='".$buyername."' ,buyer_email='".$buyeremail."' ,buyer_address='".$buyeraddress."',buyer_cnic='".$buyercnic."' WHERE buyer_id=".$_SESSION["buyer-login"];

  $data = mysqli_query($conn,$sql);
  $updated="true";
}?>

  <div class="hero-wrap" style="background-image: url('images/slides-galleria4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Personal Profile</span></p>
            <!-- <h1 class="mb-3 bread d-flex justify-content-center">Personal Profile</h1> -->
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <?php
if(isset($_POST["name"])){
?>
<div class="bread d-flex justify-content-center">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Hi.. <strong><?php echo $_POST["name"];?>!</strong> Your Profile Updated Successfuly.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
<?php
}?>


    <h1 class="mb-3 bread text-info d-flex justify-content-center">Personal Profile</h1>

    <?php
		$sql = "SELECT * FROM buyer  where buyer_id =".$_SESSION["buyer-login"];
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
        ?>
        <div class="d-flex justify-content-center">
            <div class="card col-md-8">
                <div class="card-body">
                  <form action="" method="POST" class="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label text-info">Buyer Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Sameen Zaka" value="<?php echo $row["buyer_name"];?>">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-info">Buyer Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="sameen@gmail.com" value="<?php echo $row["buyer_email"];?>">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label text-info">Buyer address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="National Textile University Sheikhupura Road, Faisalabad" value="<?php echo $row["buyer_address"];?>">
                    </div>

                    <div class="mb-3">
                        <label for="cnic" class="form-label text-info">Buyer CNIC</label>
                        <input type="text" class="form-control" id="cnic" name="cnic" placeholder="33100-8815027-1" value="<?php echo $row["buyer_cnic"];?>">
                    </div>

                    <div class="mb-3 d-flex justify-content-center">
                        <button class="btn btn-info" type="submit">Update Profile</button>
                    </div>
                  </form>

                </div>
            </div>
    </div>
      <?php
    }}?>
<br>
<br>
		
		
<?php 
include "footer.php";
?>