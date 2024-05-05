
<?php

include 'header/header.php';


if(isset($_POST['save'])) {
    include '../config.php';
    $overview_2 = mysqli_real_escape_string($conn, $_POST['overview-2']);
  
        $sql1 = "INSERT INTO overview_2(overview_contact)
         VALUES('{$overview_2 }')";

         if(mysqli_query($conn, $sql1)) {
            header("Location: {$header}Dashboard/overview.php");
       
    }
}

?>
<section class="add-overview-2">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <h1>Add Overview Contact</h1>

      <div class="card shadow">
                <form  action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label></label>
                          <input type="text" name="overview-2" class="form-control" placeholder="overview-2 Contact" required>
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