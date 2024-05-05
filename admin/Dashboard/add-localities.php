<?php

include 'header/header.php';


if(isset($_POST['submit'])) {
    include '../config.php';
    $education = mysqli_real_escape_string($conn, $_POST['education']);
    $transport = mysqli_real_escape_string($conn, $_POST['transport']);
    $hospital = mysqli_real_escape_string($conn, $_POST['hospital']);
    $hotal = mysqli_real_escape_string($conn, $_POST['hotal']);
 

        $sql1 = "INSERT INTO localities_details(education, transport, hospital, hotel)
         VALUES('{$education}', '{$transport}', '{$hospital}', '{$hotal}')";

         if(mysqli_query($conn, $sql1)) {
            header("Location: {$header}Dashboard/Localities.php");
         
    }
}


?>
<section class="add-amenities-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
            <h1>Add Localities Details</h1>
               <div class="card shadow">
                <!-- Form -->
                <form  action="" method="POST">
                      <div class="form-group">
                          <label for="education">Education</label>
                          <input type="text" name="education" placeholder="Education..." class="form-control" autocomplete="off" required>
                      </div>
                    
                      <div class="form-group">
                          <label for="transport">Transport</label>
                          <input type="text" name="transport" placeholder="transport..." class="form-control" autocomplete="off" required>
                      </div>
                    

                      <div class="form-group">
                          <label for="hospital">Hospital</label>
                          <input type="text" name="hospital" placeholder="hospital.." class="form-control" autocomplete="off" required>
                      </div>

                      
                      <div class="form-group">
                          <label for="hotal">Hotal</label>
                          <input type="text" name="hotal" placeholder="hotal.." class="form-control" autocomplete="off" required>
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