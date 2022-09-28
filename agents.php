<?php
include "header.php";

?>

<div class="hero-wrap" style="background-image: url('images/slides-galleria4.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs text-secondary"><span class="mr-2"><a href="index.php">Home</a></span> <span>Agents</span></p>
        <h1 class="mb-3 bread">Agents</h1>
      </div>
    </div>
  </div>
</div>

<section>
  <div class="how-section2 bg-dark">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <h3 class="text-white text-uppercase p-4 mt-5">
            Flexible, Contemporary
            <br>
            Spaces
          </h3>

          <p class="pl-3 pt-0 text-white">
            We design and service the next generation office building – <br> one that feels more like a full-service, lifestyle hotel
          </p>
        </div>
        <div class="col-md-6">
          <img src="../admin-panel/agent-profile/img1.jpg" class="img img-fluid">
        </div>
      </div>

    </div>
  </div>
</section>
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM agent";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img" style="background-image: url(../admin-panel/agent-profile/<?php echo $row["image"]; ?>);"></div>
              <div class="text pt-4">
                <h3><a href="#"><?php echo $row["agent_name"]; ?></a></h3>
                <span class="position mb-2"><?php echo $row["agent_id"]; ?></span>
                <p><?php echo $row["agent_email"]; ?></p>
                <ul class="ftco-social d-flex">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
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