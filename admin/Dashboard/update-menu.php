<?php include './header/header.php';

?>
<section class="add-overview-2">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-12">
      <h1> Modify Menu</h1>

      <div class="card shadow">

      
      <?php
                    include '../config.php';

                    $menu_id = $_GET['eid'];
                    $sql = "SELECT * FROM header WHERE id = '{$menu_id }'";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
                <form action="save-update-menu.php" method ="POST" autocomplete="off">
                <div class="form-group">
                          <input type="hidden" name="menu_id"  class="form-control" value="<?php echo $row['id'];?>" placeholder="" >
                      </div>
                      <div class="form-group">
                          <label>Menu</label>
                          <input type="text" name="header_menu" value="<?php echo $row['menu'];?>" class="form-control" placeholder="Add Menu">
                      </div>
                  
                 
                      <input type="submit"  name="save" class="btn btn-button" value="Save"/>
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