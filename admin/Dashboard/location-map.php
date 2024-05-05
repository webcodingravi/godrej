<?php
include 'header/header.php'; ?>


<section class="location_map">
<div class="row justify-content-center">
             <div class="col-md-12 col-lg-12 col-12">
                 <h1 class="admin-heading text-center mb-4">Location Map Section</h1>
             </div>
              <div class="col-md-offset-3 col-md-6 card">
                  <!-- Form -->

                  <?php
          include '../config.php';
    
          $sql = "SELECT * FROM location_map";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
                              
                  <form action="update-location.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="heading_location">heading</label>
                          <input type="text" name="heading_location" value="<?php echo $row['heading']; ?>" class="form-control" autocomplete="off" required="">
                      </div>

            
        
                      <div class="form-group">
                          <label for="location-map">Location</label>
                          <input type="file" name="location_map" class="form-control mb-3">
                          <img src="../assets/img/map/<?php echo $row['location_map']; ?>" height="100px">
                          <input type="hidden" name="old_location" value="<?php echo $row['location_map']; ?>">
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