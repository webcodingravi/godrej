
<?php

include 'header/header.php';


if(isset($_POST['save'])) {
    include '../config.php';
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_size = mysqli_real_escape_string($conn, $_POST['product_size']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
  
        $sql1 = "INSERT INTO price_details(product_name, product_size, product_price)
         VALUES('{$product_name}', '{$product_size}', '{$product_price}')";

         if(mysqli_query($conn, $sql1)) {
            header("Location: {$header}Dashboard/price.php");
       
    }
}

?>
<section class="add-price-section">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <h1>Add Price Section Details</h1>

      <div class="card shadow">
                <form action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" name="product_name" class="form-control" placeholder="Product Name..." required>
                      </div>

                      <div class="form-group">
                          <label>Product Size</label>
                          <input type="text" name="product_size" class="form-control" placeholder="Product Size...." required>
                      </div>

                      <div class="form-group">
                          <label>Product Price</label>
                          <input type="text" name="product_price" class="form-control" placeholder="Product Price...." required>
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