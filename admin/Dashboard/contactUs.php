<?php
include 'header/header.php'; ?>


<section class="banner_wrapper">
<div class="row justify-content-center">
             <div class="col-md-12 col-lg-12 col-12">
                 <h1 class="admin-heading text-center mb-4">Contact Us</h1>
             </div>
              <div class="col-md-offset-3 col-md-6 card">
                  <!-- Form -->

                  <?php
          include '../config.php';
    
          $sql = "SELECT * FROM contact_us";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
                              
                  <form action="update-contactUs.php" method="POST">
                      <div class="form-group">
                          <label for="email">Email ID</label>
                          <input type="text" name="email" value="<?php echo $row['email_id']; ?>" class="form-control" autocomplete="off" required="">
                      </div>

                      <div class="form-group">
                          <label for="phone">Mobile Number</label>
                          <input type="text" name="phone" value="<?php echo $row['phone_n']; ?>" class="form-control" autocomplete="off" required="">
                      </div>

                      <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" autocomplete="off" required="">
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