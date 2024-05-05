<?php include 'header/header.php'; ?>


<!-- social media section -->

<section class="add-price-section">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <h1>Add Social Icons</h1>

      <div class="card shadow">
                <form action="save-soical.php" method ="POST" enctype="multipart/form-data">

                

                      <div class="form-group">
                          <label>Social Link</label>
                          <input type="text" name="social_link" class="form-control" placeholder="Social Link..." >
                      </div>

                      <div class="form-group">
                          <label for="social-icon">Social Icon</label>
                          <input type="file" name="fileToUpload" class="form-control mb-3">
                          
                      </div>
                 
                      <input type="submit"  name="save" class="btn btn-button" value="Save" required />
                  </form>
              
</div>
    </div>
  </div>
</div>

</section>









<?php
include 'footer/footer.php'; ?>