<?php 
include "header.php";
?>
    <div class="hero-wrap" style="background-image: url('images/slides-galleria4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"></span></p>
            <h1 class="mb-3 bread">Property</h1>
          </div>
        </div>
      </div>
    </div>

    

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
			<?php
			$sql = "SELECT * FROM addhouse";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
			if($row["status"] == "Approved"){
			?>			
    			<div class="col-md-4 ftco-animate">
    				<div class="properties">
    					<a href="property-single.php?id=<?php echo $row['house_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center"
						style="background-image: url(../seller/house-images/<?php echo $row["image2"];?>);" >
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="property-single.php?id=<?php echo $row['house_id']; ?>"><?php echo $row["description"];?></a></h3>
		    						<p><?php echo $row["property_type"];?></p>
	    						</div>
	    						<div class="two">
	    							<span class="price">Rs.<br><?php echo number_format($row["price"]);?></span>
    							</div>
    						</div>
    						<p><?php echo $row["location"];?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
				<?php }}} ?>

			<?php
			$sql = "SELECT * FROM addplot";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
			?>					
    			<div class="col-md-4 ftco-animate">
    				<div class="properties">
    					<a href="property-single-plot.php?id=<?php echo $row['plot_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center"
						style="background-image: url(../seller/plot-images/<?php echo $row["image1"];?>);" >
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="property-single-plot.php?id=<?php echo $row['plot_id']; ?>"><?php echo $row["description"];?></a></h3>
		    						<p><?php echo $row["property_type"];?></p>
	    						</div>
	    						<div class="two">
	    							<span class="price">Rs.<br><?php echo number_format($row["price"]);?></span>
    							</div>
    						</div>
    						<p><?php echo $row["location"];?></p>
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
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
		
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