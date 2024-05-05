<?php include './header/header.php';

?>
<section class="add-price-section">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-12">
      <h1> Modify Price Details</h1>

      <div class="card shadow">

      
      <?php
                    include '../config.php';

                    $price_update_id = $_GET['eid'];
                    $sql = "SELECT * FROM price_details WHERE id = '{$price_update_id}'";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
                <form action="save-update-priceDetials.php" method ="POST" autocomplete="off">
                <div class="form-group">
                          <input type="hidden" name="price_id"  class="form-control" value="<?php echo $row['id'];?>" placeholder="" >
                      </div>
                      <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" name="product_name" class="form-control" value="<?php echo $row['product_name'];?>" placeholder="Product Name..." required>
                      </div>

                      <div class="form-group">
                          <label>Product Size</label>
                          <input type="text" name="product_size" class="form-control" value="<?php echo $row['product_size'];?>" placeholder="Product Size...." required>
                      </div>

                      <div class="form-group">
                          <label>Product Size</label>
                          <input type="text" name="product_price" class="form-control" value="<?php echo $row['product_price'];?>" placeholder="Product Price...." required>
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