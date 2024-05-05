<?php include './header/header.php';

?>

<section class="price-section">
    <div class="container">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-12">
                <h1 class="text-center mb-5">Price Section</h1>
                <div class="card shadow">
                <?php
          include '../config.php';
    
          $sql = "SELECT * FROM price_1";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
      
                <form action="update_price.php" method ="POST" autocomplete="off" enctype="multipart/form-data">
            
                      <div class="form-group">
                          <label>Heading</label>    
                          <input type="text" name="heading" value="<?php echo $row['heading']; ?>" class="form-control" placeholder="Heading...." required>
                      </div>
                          <div class="form-group">
                          <label>Paragraph</label>
                          <textarea rows="5"  class="form-control" name="paragraph" placeholder="Paragraph..."><?php echo $row['pargraph']; ?></textarea>
                      </div>

                      <div class="form-group">
                          <label for="background">Background Images</label>
                          <input type="file" name="background" class="form-control mb-3">
                          <img src="../assets/img/price/<?php echo $row['background']; ?>" height="100px">
                          <?php echo $row['background']; ?>
                          <input type="hidden" name="old-background" value="<?php echo $row['background']; ?>">
                      </div>

                    
                      <input type="submit"  name="save" class="btn btn-button" value="Save" required />
                  </form>

                  <?php
               }
            }else {
                echo "No Record found";
            }
        ?>

              
</div>
            </div>
        </div>
    </div>
</section>



<!-- Price details -->

<section class="price-details">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
      <h1 class="text-center mb-5">Price Details</h1>
    
      <a href="add-price-details.php" class="btn btn-button mb-3">Add +</a>
    <div class="card shadow" style="overflow-x:auto;">
    <?php
                   include '../config.php';


                   $limit = 3;
                   if(isset($_GET['page'])) {
                      $page = $_GET['page'];
                   }else {
                    $page = 1;
                
                   }

                   $offset = ($page - 1) * $limit;
                   
                   $sql = "SELECT * FROM price_details ORDER BY id DESC LIMIT {$offset}, {$limit}";

                    $result = mysqli_query($conn, $sql) or die("Query failed");

                    if(mysqli_num_rows($result) > 0) {
                        
                
                    ?>
                      <table class="table table-bordered">
                      <thead class="bg-secondary text-white">
                          <th>S.No.</th>
                          <th>Product Name</th>
                          <th>Product Size</th>
                          <th>Product Price</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody class="bg-light">

                        <?php
                           $serial = $offset + 1;
                           while($row = mysqli_fetch_assoc($result)) {


                           ?>
                          <tr>
                          <td class='id'><?php echo $serial; ?></td>
                              <td><?php echo $row['product_name'];?></td>

                              <td><?php echo $row['product_size'];?></td>
                              <td><?php echo $row['product_price'];?></td>
                           
                              
                               </td>
                              <td class='edit'><a href='update-price-details.php?eid=<?php echo $row['id'];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-price-details.php?id=<?php echo $row['id'];?>'><i class="fas fa-trash"></i></a></td>
                          </tr>


                          <?php
                           $serial++;
                         }

                        ?>
                      </tbody>
                      
                  
                  </table>

                  <?php
                   }
                   
                       $sql1 = "SELECT * FROM price_details";

                       $result1 = mysqli_query($conn, $sql1) or die("Query failed");

                       if(mysqli_num_rows($result1) > 0) {
                         $total_records = mysqli_num_rows($result1);
                       
                         $total_page = ceil($total_records / $limit);
                          
                         echo "<ul class='pagination admin-pagination'>";
                         if($page > 1) {
                            echo '<li><a href="price.php?page='.($page - 1).'">Prev</a></li>';
                         }  
                       
                         for($i = 1; $i <= $total_page; $i++) {
                            if($i == $page) {
                                $active = "active";
                            }else {
                               $active = "";
                            }
                            echo '<li class="'.$active.'" ><a href="price.php?page='.$i.'">'.$i.'</a></li>';
                         }
                         if($total_page > $page)
                         echo '<li><a href="price.php?page='.($page + 1).'">Next</a></li>';
                          echo " </ul>";

                       }

                     ?>
</tbody>

</table>

</div>
</div>
</div>
        </div>


                      </section>







<?php
include 'footer/footer.php'; ?>