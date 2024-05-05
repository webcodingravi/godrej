<?php
include 'header/header.php'; ?>


<section class="gellery_section">
<div class="row justify-content-center">
             <div class="col-md-12 col-lg-12 col-12">
                 <h1 class="admin-heading text-center mb-4">Gallery Section</h1>
             </div>
              <div class="col-md-offset-3 col-md-6 card">
                  <!-- Form -->

                  <?php
          include '../config.php';
    
          $sql = "SELECT * FROM gellery_section";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
                              
                  <form action="update-gallery.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="heading">heading</label>
                          <input type="text" name="heading" value="<?php echo $row['heading']; ?>" class="form-control" autocomplete="off" required="">
                      </div>

                      <div class="form-group">
                          <label for="paragraph">Paragraph</label>
                          <textarea rows="10" class="form-control" name="paragraph"><?php echo $row['paragraph']; ?></textarea>
                        
                      </div>
        
                      <div class="form-group">
                          <label for="slide1">Slider 1</label>
                          <input type="file" name="slider" class="form-control mb-3">
                          <img src="../assets/img/Gallery/<?php echo $row['slider_1']; ?>" height="100px">
                          <input type="hidden" name="old-slider-1" value="<?php echo $row['slider_1']; ?>">
                          <span class="text-secondary">Image Size Uploaded Upto 2Mb (1900 x 500)<span>
                      </div>

                      <div class="form-group">
                          <label for="slide2">Slider 2</label>
                          <input type="file" name="slider-2" class="form-control mb-3">
                          <img src="../assets/img/Gallery/<?php echo $row['slider_2']; ?>" height="100px">
                          <input type="hidden" name="old-slider-2" value="<?php echo $row['slider_2']; ?>">
                          <span class="text-secondary">Image Size Uploaded Upto 2Mb (1900 x 500)<span>
                      </div>

                      <div class="form-group">
                          <label for="slide3">Slider 3</label>
                          <input type="file" name="slider-3" class="form-control mb-3">
                          <img src="../assets/img/Gallery/<?php echo $row['slider_3']; ?>" height="100px">
                          <input type="hidden" name="old-slider-3" value="<?php echo $row['slider_3']; ?>">
                          <span class="text-secondary">Image Size Uploaded Upto 2Mb (1900 x 500)<span>
                      </div>

               
                
                      <input type="submit" name="submit" class="btn btn-button" value="Save" required="">
                  </form>

                  <?php
               }
            }else {
                echo "No Record found";
            }
        ?>

                  
                  <!--/Form -->
              </div>
          </div>

</section>












<?php
include 'footer/footer.php'; ?>