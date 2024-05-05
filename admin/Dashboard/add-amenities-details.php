<?php include './header/header.php';
?>

<section class="add-amenities-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
            <h1>Add Amenities Details</h1>
               <div class="card shadow">
                <!-- Form -->
                <form  action="save-amenities.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="amenities_title" placeholder="Please Enter Title Name..." class="form-control" autocomplete="off" required>
                      </div>
                    
                   
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload" class="form-control mb-3" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-button" value="Save" required />
                  </form>
                  <!--/Form -->
                  </div>
            </div>
        </div>
    </div>
</section>



<?php
include 'footer/footer.php'; ?>