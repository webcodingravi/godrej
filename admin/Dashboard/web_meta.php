<?php
include 'header/header.php'; ?>


<section class="banner_wrapper">
<div class="row justify-content-center">
             <div class="col-md-12 col-lg-12 col-12">
                 <h1 class="admin-heading text-center mb-4">Web Meta Setting</h1>
             </div>
              <div class="col-md-offset-3 col-md-6 card">
                  <!-- Form -->

                  <?php
          include '../config.php';
    
          $sql = "SELECT * FROM web_meta";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
                              
                  <form action="update_web_meta.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="web_title">Web Title</label>
                          <input type="text" name="web_title" value="<?php echo $row['web_title']; ?>" class="form-control" autocomplete="off" required="">
                      </div>

                   
                      <div class="form-group">
                          <label for="meta_description">Meta Description</label>
                          <input type="text" name="meta_description" value="<?php echo $row['meta_desc']; ?>" class="form-control" autocomplete="off" required="">
                      </div>
        
                      <div class="form-group">
                          <label for="meta_keywords">Meta Keywords</label>
                          <input type="text" name="meta_keywords" value="<?php echo $row['meta_keywords']; ?>" class="form-control" autocomplete="off" required="">
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