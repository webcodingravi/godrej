
<?php

include 'header/header.php';


if(isset($_POST['save'])) {
    include '../config.php';
    $menu = mysqli_real_escape_string($conn, $_POST['header_menu']);
  
        $sql1 = "INSERT INTO header(menu)
         VALUES('{$menu}')";

         if(mysqli_query($conn, $sql1)) {
            header("Location: {$header}Dashboard/header_section.php");
       
    }
}

?>
<section class="add-overview-2">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <h1>Add Menu</h1>

      <div class="card shadow">
                <form  action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Menu</label>
                          <input type="text" name="header_menu" class="form-control" placeholder="Add Menu" required>
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