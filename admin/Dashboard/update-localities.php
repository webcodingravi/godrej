<?php

include 'header/header.php';


?>
<section class="add-amenities-details">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-12">
        <h1>Update Localities Details</h1>
        <div class="card shadow">
          <!-- Form -->

          <?php
                    include '../config.php';

                    $localities_id = $_GET['eid'];
                    $sql = "SELECT * FROM localities_details WHERE id = '{$localities_id}'";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <form action="save-update-localities.php" method="POST">

            <div class="form-group">
              <input type="hidden" name="localities_id" class="form-control" value="<?php echo $row['id'];?>"
                placeholder="">
            </div>
            <div class="form-group">
            <label for="education">Education</label>
              <input type="text" name="education" class="form-control" value="<?php echo $row['education']; ?>"
                placeholder="education">
            </div>

            <div class="form-group">
            <label for="transport">Transport</label>
              <input type="text" name="transport" class="form-control" value="<?php echo $row['transport']; ?>"
                placeholder="transport">
            </div>

            <div class="form-group">
            <label for="hospital">Hospital</label>
              <input type="text" name="hospital" class="form-control" value="<?php echo $row['hospital']; ?>"
                placeholder="hospital">
            </div>

            <div class="form-group">
            <label for="hotal">Hotal</label>
              <input type="text" name="hotal" class="form-control" value="<?php echo $row['hotel']; ?>"
                placeholder="hotal">
            </div>



            <input type="submit" name="submit" class="btn btn-button" value="Save" />
          </form>
          <!--/Form -->

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