<?php include './header/header.php';

?>
<section class="add-overview-2">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-12">
      <h1> Modify Overview Contact</h1>

      <div class="card shadow">

      
      <?php
                    include '../config.php';

                    $overview_id = $_GET['eid'];
                    $sql = "SELECT * FROM overview_2 WHERE id = '{$overview_id }'";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
                <form  action="save-update-overview-2.php" method ="POST" autocomplete="off">
                <div class="form-group">
                          <input type="hidden" name="overview_id"  class="form-control" value="<?php echo $row['id'];?>" placeholder="" >
                      </div>
                      <div class="form-group">
                          

                
                          <input type="text" name="overview-2" class="form-control" value="<?php echo $row['overview_contact']; ?>" placeholder="Modify Contact" required>
                      </div>
                  
                 
                      <input type="submit"  name="save" class="btn btn-button" value="Save" required />
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