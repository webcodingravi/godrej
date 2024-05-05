<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
                    include 'config.php';

                    $sql = "SELECT * FROM web_meta";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      ?>
  <meta name="description"
    content="<?php echo $row['meta_desc']; ?>">
  <meta name="keywords" content="<?php echo $row['meta_keywords']; ?>">
  <?php
                      }
                    } 

                  ?>

  <?php
                    include 'config.php';

                    $sql = "SELECT * FROM web_meta";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      ?>

                     <title><?php echo $row['web_title']; ?></title>

                       <?php
                      }
                    } 

                  ?>
  <!-- icon -->
  <link rel="icon" type="image/png" href="assets/logo/Godrej_Logo.png">
  <!-- font awesome 5 icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- boostrap-5 CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css" type="text/css">
  <!-- CUSSTOM CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>


  <div class="ribban-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">



          <?php
                    include 'config.php';

                    $sql = "SELECT * FROM contact_us";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>

          <div class="contect-icon">
            <li><a href="+91-9212306116">
                <i class="fas fa-phone-square-alt"> </i> <?php echo $row['phone_n']; ?>
              </a>
            </li>

            <li> <a href="info@kashioverseasmanpower.com">
                <i class="fas fa-envelope"></i> <?php echo $row['email_id']; ?>
              </a></li>




            <li> <a href="info@kashioverseasmanpower.com">
                <i class="fas fa-map-marker-alt"></i> <?php echo $row['address']; ?>
              </a></li>

          </div>

          <?php
                      }
                    } 

                  ?>




        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="social-icon">
            <ul>
            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM social_media";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>


             <li><a href="<?php echo $row['social_link']; ?>" target="_blank"><img src="admin/assets/img/social/<?php echo $row['social_icon']; ?>" width="20"></i></a></li>
             <!-- <li><a href="#" target="_blank"><img src="assets/img/social-icon/instagram.png" width="20"></i></a></li>

             <li><a href="#" target="_blank"><img src="assets/img/social-icon/twitter.png" width="20"></i></a></li>

             <li><a href="#" target="_blank"><img src="assets/img/social-icon/whatsapp.png" width="20"></i></a></li> -->
             
             <?php
                      }
                    } 

                  ?>
              <!-- <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> -->
            </ul>
          </div>


        </div>

      </div>
    </div>



  </div>
  <!-- header section -->
  <div class="header_wrapper shadow">
    <nav class="navbar navbar-expand-lg" id="navbarscroll">
      <div class="container">
      <?php
                    include 'config.php';

                    $sql = "SELECT * FROM logo";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
        <a href="" class="navbar-brand">
          <img src="admin/assets/img/logo/<?php echo $row['logo']; ?>" class="img-fluid" alt="logo" width="150"></a>

          <?php
                      }
                    } 

                  ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
          aria-controls="#navbarToggler" aria-expanded="false">
          <span class="navbar-toggle-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">


 
          <ul class="navbar-nav">
          <?php
                    include 'config.php';

                    $sql = "SELECT * FROM header";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>

            <li class="nav-item">
              <a href="#<?php echo $row['menu']; ?>" class="nav-link active"><?php echo $row['menu']; ?></i></a>

            </li>

            <!-- <li class="nav-item">
              <a href="#price" class="nav-link">Price</a>
            </li>

            <li class="nav-item">
              <a href="#amenities" class="nav-link">Amenities</a>
            </li>
            <li class="nav-item">
              <a href="#Gellery" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="#localities" class="nav-link">Localities</a>
            </li>
            <li class="nav-item">
              <a href="#faq" class="nav-link">FAQ </a>
            </li>

            <li class="nav-item">
              <a href="#contact-Us" class="nav-link">Contact</a>
            </li> -->

            <?php
                      }
                    } 

                  ?>

          </ul>


        </div>
      </div>
    </nav>
  </div>



  <!-- Banner section -->
  <section class="banner-section">
    <div class="banner container-fluid">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
        <div class="carousel-inner">
        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM banner";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <div class="carousel-item active">
            <img src="admin/assets/img/banner/<?php echo $row['slider_1']; ?>" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="admin/assets/img/banner/<?php echo $row['slider_2']; ?>" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="admin/assets/img/banner/<?php echo $row['slider_3']; ?>" class="d-block" alt="...">
          </div>

          <?php
                      }
                    } 

                  ?>
        </div>
      </div>


    </div>
    <div class="banner-text">
      <div class="container">
        <div class="row">

        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM banner";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 data-aos="fade-up" data-aos-delay="200"><?php echo $row['title']; ?></h1>
            <h2 class="pb-2" data-aos="fade-up" data-aos-delay="300"><?php echo $row['sub_title']; ?></h2>

            <!-- <a href="#" class="btn btn-button">Learn More..</a> -->
          </div>
          <?php
                      }
                    } 

                  ?>
        </div>
      </div>
    </div>

  </section>


  <!-- about section -->
  <section class="about-section" id="OVERVIEW">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">

        
      <?php
                    include 'config.php';

                    $sql = "SELECT * FROM overview_1";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <div class="about-text">
            <h1 class="about-heading" data-aos="fade-down" data-aos-delay="200"><?php echo $row['heading']; ?></h1>
            <p data-aos="fade-up" data-aos-delay="300"><?php echo $row['paragraph']; ?></p>
          </div>

          <?php
                      }
                    } 

                  ?>
        </div>

       



        <div class="col-lg-6 col-md-6 col-sm-12 about-contact">
          <div class="about-contact-containt">


         
            <table class="table table-bordered">
            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM overview_2";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
              <tr>
             
                <td>

                  <i class="fas fa-check text-danger"></i> <?php echo $row['overview_contact']; ?>

                
                </td>
                <?php
                      }
                    } 

                  ?>
                <!-- <td>
                  <i class="fas fa-check text-danger"></i> Payment Plan
                  CLP
                </td>
              </tr>

              <tr>

                <td><i class="fas fa-check text-danger"></i> Total Units
                  46 Only</td>

                <td>
                  <i class="fas fa-check text-danger"></i> Sizes
                  2201 - 3097 Sq. Ft.

                </td>
              </tr>

              <tr>

                <td><i class="fas fa-check text-danger"></i> Project Status
                  Upcoming</td>

                <td><i class="fas fa-check text-danger"></i>
                  Site Area
                  1 Acre</td>
              </tr>
              <tr>

                <td><i class="fas fa-check text-danger"></i> Booking Amount On Request</td>

                <td><i class="fas fa-check text-danger"></i> Booking Amount On Request</td>
              </tr> -->

            </table>
          

         
            <h2> <i class="fas fa-phone-alt">

              </i> Book A Site Visit</h2><Br>

            <div class="book-site-form">
              <form action="" class="row g-2">
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Name..">
                </div>

                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Mobile No..">
                </div>

                <div class="col-auto">
                  <input type="email" class="form-control" placeholder="Email Id..">
                </div>

                <div class="col-auto">
                  <input type="button" class="btn btn-about" value="Submit">
                </div>
              </form>

            </div>
          </div>


        </div>
      </div>
    </div>


    </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- Price section -->
  <section class="price-section" id="PRICES">

  <?php
                    include 'config.php';

                    $sql = "SELECT * FROM price_1";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
    <div class="price-background">
      <img src="admin/assets/img/price/<?php echo $row['background']; ?>">
    </div>

    <?php
                      }
                    } 

                  ?>
    <div class="price-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">

          <?php
                    include 'config.php';

                    $sql = "SELECT * FROM price_1";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
            <h1 class="price-heading mb-5" data-aos="fade-down" data-aos-delay="200"><?php echo $row['heading']; ?></h1>
            <p class="price-text mb-5" data-aos="fade-down" data-aos-delay="300"><?php echo $row['pargraph']; ?></p>

              <?php
                      }
                    } 

                  ?>
          </div>

          <?php
                    include 'config.php';

                    $sql = "SELECT * FROM price_details";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <div class="col-lg-4 col-md-4 col-sm-12">


            <div class="card" data-aos="fade-down" data-aos-delay="400">
              <div class="card-body">
                <div class="card-heading">
                  <h6 class="card-title mb-2"><?php echo $row['product_name']; ?></h6>
                </div>
                <p class="card-text">
                <h6 class="fw-bold"><?php echo $row['product_size']; ?></h6>
                </p>
                <div class="card-footer">
                  <h6 class="mt-2"><?php echo $row['product_price']; ?></h6>
                </div>

              </div>
            </div>


          </div>

          <?php
                      }
                    } 

                  ?>

          <!-- <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="card-heading">
                  <h6 class="card-title mb-2">3 BHK + U + PR</h6>
                </div>
                <p class="card-text">
                <h6 class="fw-bold text-primary">Unit Size
                  2413 Sq. Ft.</h6>
                </p>
                <div class="card-footer">
                  <h6 class="mt-2">₹ 18 Cr. Onwards</h6>
                </div>

              </div>
            </div>







          </div>


          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="card-heading">
                  <h6 class="card-title mb-2">3 BHK + U + PR</h6>
                </div>
                <p class="card-text">
                <h6 class="fw-bold text-primary">Unit Size
                  2636 Sq. Ft.</h6>
                </p>
                <div class="card-footer">
                  <h6 class="mt-2">20 Cr. Onwards</h6>
                </div>

              </div>
            </div>







          </div> -->





        </div>


      </div>
    </div>
  </section>


  <!-- end price section -->

  <!-- Amenities Section -->
  <section class="Amenities-section" id="AMENITIES">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM amenities_1";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <h2 class="amenities-heading mb-5" data-aos="fade-down" data-aos-delay="200"><?php echo $row['heading']; ?></h2>
          <p class="amenities-text" data-aos="fade-up" data-aos-delay="300">
          <?php echo $row['paragraph']; ?>
          </p>

          <?php
                      }
                    } 

                  ?>
        </div>



        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM amenities_details";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
        <div class="col-lg-4 col-md-4 col-12 mt-2">

        <div class="card shadow" data-aos="fade-up" data-aos-delay="400">
  <img src="admin/assets/img/amenitites/<?php echo $row['post_image']; ?>" class="card-img-top" alt="..." data-aos="fade-down" data-aos-delay="400">
  
  
  <div class="card-body">
    <h6 class="card-text"><?php echo $row['title']; ?>"</h6>
  </div>
</div>
          <!-- <img src="assets/img/amenities/amenities.jpg" class="img-fluid"> -->
        </div>


        <?php
                      }
                    } 

                  ?>

      </div>
    </div>

  </section>


  <!-- end Amenities Section -->


  <!-- Gellery Section start -->
  <section class="gellery-section" id="GALLERY">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 text-center">
        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM gellery_section";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <h4 class="gellery-heading" data-aos="fade-up" data-aos-delay="200"><?php echo $row['heading']; ?></h4>
          <p class="mt-3" data-aos="fade-down" data-aos-delay="300"><?php echo $row['paragraph']; ?></p>

            <?php
                      }
                    } 

                  ?>

        </div>

        <div class="col-lg-12 col-md-12 col-12">

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="400">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM gellery_section";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
              <div class="carousel-item active">
                <img src="admin/assets/img/Gallery/<?php echo $row['slider_1']; ?>" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="admin/assets/img/Gallery/<?php echo $row['slider_2']; ?>" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="admin/assets/img/Gallery/<?php echo $row['slider_3']; ?>" class="d-block" alt="...">
              </div>

              <?php
                      }
                    } 

                  ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>


      </div>
    </div>



  </section>



  <!-- end Gellery Section -->



  <!-- Localities section -->
  <section class="localities-map">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 text-center mb-4">
        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM location_map";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <h2 data-aos="fade-up" data-aos-delay="200"><?php echo $row['heading']; ?></h2>


          <?php
                      }
                    } 

                  ?>
        </div>

        <div class="col-lg-12 col-md-12 col-12">

        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM location_map";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
            <div class="location_map" data-aos="fade-down" data-aos-delay="300">
          <img src="admin/assets/img/map/<?php echo $row['location_map']; ?>" class="img-fluid">

          <?php
                      }
                    } 

                  ?>
                  </div>
        </div>


      </div>
    </div>
  </section>


  <section class="localities-section mt-4" id="LOCALITIES">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 text-center mb-4">
        <?php
                    include 'config.php';

                    $sql = "SELECT * FROM localities_1";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <h2 data-aos="fade-up" data-aos-delay="200"><?php echo $row['heading']; ?></h2>
          <p data-aos="fade-down" data-aos-delay="250"><?php echo $row['paragraph']; ?></p>


            <?php
                      }
                    } 

                  ?>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
          <div class="card">
            <div class="card-header bg-dark text-white text-center fw-400">
              Education
            </div>
            <ul class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="400">

            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM localities_details";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row['education']; ?></li>
              <!-- <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> St. Columbus School</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                Bhartiya Vidya Bhavan</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                British Council Library</li> -->

                <?php
                      }
                    } 

                  ?>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
          <div class="card">
            <div class="card-header bg-dark text-white text-center fw-400">
              Transport
            </div>
            <ul class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="400">
            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM localities_details";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row['transport']; ?></li>
              <!-- <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Barakhamba Road Metro</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                New Delhi Railway Station</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                Delhi International Hospital</li> -->
                <?php
                      }
                    } 

                  ?>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
          <div class="card">
            <div class="card-header bg-dark text-white text-center fw-400">
              Hospital
            </div>
            <ul class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="400">

            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM localities_details";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row['hospital']; ?></li>
              <!-- <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Delhi Heart & Lung Institute</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                Sir Ganga Ram Hospital</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                BLK Hospital</li> -->
                <?php
                      }
                    } 

                  ?>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
          <div class="card">
            <div class="card-header bg-dark text-white text-center fw-400">
              Hotel
            </div>
            <ul class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="400">
            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM localities_details";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row['hotel']; ?></li>
              <!-- <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> The Lalit</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                Hotel The Royal Plaza</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                Le Meridien</li> -->
                <?php
                      }
                    } 

                  ?>
            </ul>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- end Localities section -->

  <!-- Faq section start -->
  <section class="faq-section" id="FAQ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <h2 class="mb-4" data-aos="fade-up" data-aos-delay="200">Frequently Asked Questions (FAQs)</h2>
        </div>

        <div class="col-lg-12 col-md-12 col-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
           
                <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <h6 data-aos="fade-up" data-aos-delay="400">FAQ Questions <i class="fas fa-hand-pointer"></i></h6>
                
                </button>

                <?php
                    include 'config.php';

                    $sql = "SELECT * FROM faq";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
                
                
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                
                <div class="accordion-body"><?php echo $row['question']; ?> <i class="fas fa-arrow-circle-right"></i></div> 
                <div class="accordion-body"><?php echo $row['answer']; ?></div>

                <?php
                      }
                    } 

                  ?>
              </div>
            </div>
            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <h6>What kind of amenities does it offer?</h6>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">You will find all types of modern amenities where the gym, spa, clubhouse,
                  sports hubs and more will be the top options for your evening activities.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <h6>Is it close to the metro station?</h6>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Metro station Patel Chowk, Janpath is 6 Min drive.</div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Faq section start -->


  <!-- contact section -->
  <section class="contact-section" id="CONTACT">
    <div class="contact-background">
      <img src="assets/img/contact/contact.png" class="img-fluid">
    </div>
    <div class="contact-details">
      <div class="container">
        <div class="row">
          <div class="container headings text-center">
            <h1 class="text-center font-weight-bold" data-aos="fade-up" data-aos-delay="200">CONTACT US</h1>
          </div>
          <div class="container">
            <div class="row">

              <form action="" method="POST" data-aos="fade-up" data-aos-delay="400">
                <div class="form-group">
                  <input type="text" name="Username" class="form-control mb-2" id="username" required=""
                    autocomplete="off" placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                  <input type="email" name="Email" class="form-control mb-2" id="email" required="" autocomplete="off"
                    placeholder="Enter Email">
                </div>

                <div class="form-group">
                  <input type="text" name="Mobile" class="form-control  mb-2" id="mobile" required="" autocomplete="off"
                    placeholder="Enter Mobile Number" pattern="[1-9]{1}[0-9]{9}" maxlength="10">

                </div>
                <div class="form-group">
                  <textarea class="form-control mb-2" rows="4" name="Message" id="comment"
                    placeholder="Enter Your Message" reqired=""></textarea>
                </div>

                <div class="d-flex justify-content-center form-button">
                  <button type="submit" class="btn btn-submit">Submit</button>
                </div>
              </form>








            </div>


          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- end contact section -->

  <!-- footer section -->
  <div class="footer-section">
    <div class="text-footer">
      <!-- <h6>Privacy Policy</h6>
    <h4>Call Us : +91-9212306116</h4> -->
      <!-- <p><strong>Disclaimer : </strong>This website is in the process of being updated. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the Company. Nothing on this website, constitutes advertising, marketing, booking, selling or an offer for sale, or invitation to purchase a unit in any project by the Company. The Company is not liable for any consequence of any action taken by the viewer relying on such material / information on this website.</p>

    <hr> -->
    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM footer";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
      <h6><?php echo $row['footer']; ?></h6>
      <?php
                      }
                    } 

                  ?>
    </div>
  </div>
  <!-- end footer section -->


  <!-- scroll button -->

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- boostrap-5 js -->
  <script src="bootstrap/bootstrap.min.js"></script>
  <!-- cusstom js -->
  <script src="js/main.js"></script>
</body>

</html>