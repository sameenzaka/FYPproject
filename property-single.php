<?php
ob_start();
include "header.php";
?>

    <div class="hero-wrap" style="background-image: url('images/slides-galleria4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Property Single</span></p>
            <h1 class="mb-3 bread">Property Single</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
<?php
$new=$_GET['id'];
$plotid=$_GET['id'];
$sql = "SELECT * from addhouse WHERE house_id = '$new' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){
?>			
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="properties-img" style="background-image: url(../seller/house-images/<?php echo $row["image1"];?>);" ></div>
          				</div>
          				<div class="item">
          					<div class="properties-img" style="background-image: url(../seller/house-images/<?php echo $row["image2"];?>);" ></div>
          				</div>
          				<div class="item">
          					<div class="properties-img" style="background-image: url(../seller/house-images/<?php echo $row["image3"];?>);" ></div>
          				</div>
          			</div>
          		</div>
				
          		<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
          			<h2><?php echo $row["description"];?></h2>
          			<p class="rate mb-4">
          				<span class="loc"><a href="#"><i class="icon-map"></i><?php echo $row["location"];?></a></span>
    						</p>
    						<p><?php echo $row["description"];?></p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul>
	    							<li><span>Area: </span><?php echo $row["area"];?></li>
	    							<li><span>Bed Rooms: </span><?php echo $row["bed_rooms"];?></li>
	    							<li><span>Bath Rooms: </span><?php echo $row["bath_rooms"];?></li>
									<li><span>Lounge: </span><?php echo $row["lounge"];?></li>

	    						</ul>
	    						<ul class="ml-md-5">
	    							<li><span>Stories: </span><?php echo $row["stories"];?></li>
	    							<li><span>Garden: </span><?php echo $row["garden"];?></li>
									<li><span>Kitchen: </span><?php echo $row["kitchen"];?></li>
	    						</ul>
    						</div>
    						<p><?php echo $row["description"];?></p>
          		</div>
          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		               	<video width="500" height="400" controls>
  <source src="../seller/house-videos/<?php echo $row["video"];?>" type="video/mp4">
  <source src="../seller/house-videos/<?php echo $row["video"];?>" type="video/ogg">
Your browser does not support the video tag.
</video> 
						<span class="icon-play"></span>
		              </figure>
		            </div>
          		</div>
<!-- 
          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="radio" class="form-check-input" id="rating" name="rating" value="<?php echo $row["rating"];?>">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="radio" class="form-check-input" id="rating" name="rating" value="<?php echo $row["rating"];?>">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="radio" class="form-check-input" id="rating" name="rating" value="<?php echo $row["rating"];?>">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="radio" class="form-check-input" id="rating" name="rating" value="<?php echo $row["rating"];?>">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="radio" class="form-check-input" id="rating" name="rating" value="<?php echo $row["rating"];?>">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div> -->
<?php }}?>				
          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Related Properties</h4>
          			<div class="row">
<?php
$sql = "SELECT * from addhouse ORDER BY house_id ASC LIMIT 2";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){
?>	
          				<div class="col-md-6 ftco-animate">
				    				<div class="properties">
				    					<a href="property-single.php?id=<?php echo $row['house_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../seller/house-images/<?php echo $row["image1"];?>);" >
				    						<div class="icon d-flex justify-content-center align-items-center">
				    							<span class="icon-search2"></span>
				    						</div>
				    					</a>
				    					<div class="text p-3">
				    						<span class="status sale">Sale</span>
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="property-single.php?id=<?php echo $row['house_id']; ?>">North Parchmore Street</a></h3>
						    						<p><?php echo $row["property_type"];?></p>
					    						</div>
					    						<div class="two">
					    							<span class="price">Rs.<br><?php echo number_format($row["price"]);?></span>
				    							</div>
				    						</div>
				    						<p><?php echo $row["description"];?></p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="flaticon-selection"></i> 250sqft</span>
				    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
				    							<span><i class="flaticon-bed"></i> 4</span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
<?php }}?>								
          			</div>
          		</div>

          	</div>
          </div> 
		  <?php
if(isset($_SERVER["REQUEST_METHOD"]));
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_SESSION["buyer-login"])){
	  $buyerid= $_SESSION["buyer-login"];


     $sql = mysqli_query($conn , "select buyer_name,buyer_email,buyer_cnic from buyer where buyer_id = '$buyerid' ");
    $row = (mysqli_fetch_array($sql));
    $buyername=$row["buyer_name"];
    $buyeremail=$row["buyer_email"];
    $buyercnic=$row["buyer_cnic"];

    $sql = "INSERT INTO buyerrequest (buyer_id,buyer_name , buyer_cnic,house_id,buyer_email) VALUES('$buyerid','$buyername' ,'$buyercnic','$plotid','$buyeremail' )";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($result){
      ?>
      <script> alert("Your Request has been successfuly sbumited to your nearest Agent");</script>
      
      <?php
      }
      else{
      echo "Failed To sent Request";
      }

	}
	else{
		header('location:buyer-login.php');
	}
  
}

?>	
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="" method="POST" >
              <button class="btn  w-100" id="submit" name="submit" type="submit">Buy</button>
                  
               
              </form>
            </div> 
		 
		  <!-- .col-md-8 -->
          <!-- <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="property.php">Properties <span>(12)</span></a></li>
                <li><a href="property.php">Home <span>(22)</span></a></li>
                <li><a href="property.php">House <span>(37)</span></a></li>
                <li><a href="property.php">Villa <span>(42)</span></a></li>
                <li><a href="property.php">Apartment <span>(14)</span></a></li>
                <li><a href="property.php">Condominium <span>(140)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>-->
          </div> 
        </div>
      </div>
    </section> <!-- .section -->
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
include "footer.php";
?>