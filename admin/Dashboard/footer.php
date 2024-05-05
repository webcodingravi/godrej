<?php
include 'header/header.php'; ?>


<section class="banner_wrapper">
<div class="row justify-content-center">
             <div class="col-md-12 col-lg-12 col-12">
                 <h1 class="admin-heading text-center mb-4">Footer Section</h1>
             </div>
              <div class="col-md-offset-3 col-md-6 card">
                  <!-- Form -->

                  <?php
          include '../config.php';
    
          $sql = "SELECT * FROM footer";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
                              
                  <form action="update-footer.php" method="POST">
                      <div class="form-group">
                          <label for="title">footer</label>
                          <input type="text" name="footer" value="<?php echo $row['footer']; ?>" class="form-control" autocomplete="off" required="">
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