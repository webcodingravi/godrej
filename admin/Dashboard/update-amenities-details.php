<?php include './header/header.php';

?>
<section class="add-price-section">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-12">
      <h1> Modify Amenities Details</h1>

      <div class="card shadow">

      
      <?php
                    include '../config.php';

                    $amenities_update_id = $_GET['eid'];
                    $sql = "SELECT * FROM amenities_details WHERE id = '{$amenities_update_id}'";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
                  <form  action="save-amenities-details.php" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                          <input type="text" hidden name="post_id" value="<?php echo $row['id']; ?>" placeholder="Please Enter Title Name..." class="form-control" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="Please Enter Title Name..." class="form-control" autocomplete="off" required>
                      </div>
                    
                   
                      <div class="form-group">
                          <label for="postImage">Post Image</label>
                          <input type="file" name="post_image">
                          <img src="../assets/img/amenitites/<?php echo $row['post_image']; ?>" height="100px">
                          <input type="hidden" name="old-image" value="<?php echo $row['post_image']; ?>">
                      </div>
                      <input type="submit" name="submit" class="btn btn-button" value="Save" required />
                  </form>
                  <?php
                      }
                    } 

                  ?>
              
</div>
    </div>
  </div>
</div>

</section>









<?php
include 'footer/footer.php'; ?>