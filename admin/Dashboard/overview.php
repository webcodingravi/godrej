<?php

include 'header/header.php';

?>

<section class="overview">
<div class="container">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-12">
                <h1 class="text-center mb-5">Overview-1</h1>
                <div class="card shadow">

                <?php
          include '../config.php';
    
          $sql = "SELECT * FROM overview_1";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
            
                <form  action="update-overview-1.php" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Heading</label>
                          <input type="text" name="heading" value="<?php echo $row['heading']; ?>" class="form-control" placeholder="Heading...." required>
                      </div>
                          <div class="form-group">
                          <label>Paragraph</label>
                          <textarea rows="5"  class="form-control" name="paragraph" placeholder="Paragraph..."><?php echo $row['paragraph']; ?></textarea>
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



<!-- overview-2 -->

<section class="overview-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
      <h1 class="text-center mb-5">Overview-2</h1>
    
      <a href="add-overview-2.php" class="btn btn-button mb-3">Add +</a>
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
                   
                   $sql = "SELECT * FROM overview_2 ORDER BY id DESC LIMIT {$offset}, {$limit}";

                    $result = mysqli_query($conn, $sql) or die("Query failed");

                    if(mysqli_num_rows($result) > 0) {
                        
                
                    ?>
                      <table class="table table-bordered">
                      <thead class="bg-secondary text-white">
                          <th>S.No.</th>
                          <th>Details</th>
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
                              <td><?php echo $row['overview_contact'];?></td>
                           
                              
                               </td>
                              <td class='edit'><a href='update-overview-2.php?eid=<?php echo $row['id'];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-overview-2.php?id=<?php echo $row['id'];?>'><i class="fas fa-trash"></i></a></td>
                          </tr>


                          <?php
                           $serial++;
                         }

                        ?>
                      </tbody>
                      
                  
                  </table>

                  <?php
                   }
                   
                       $sql1 = "SELECT * FROM overview_2";

                       $result1 = mysqli_query($conn, $sql1) or die("Query failed");

                       if(mysqli_num_rows($result1) > 0) {
                         $total_records = mysqli_num_rows($result1);
                       
                         $total_page = ceil($total_records / $limit);
                          
                         echo "<ul class='pagination admin-pagination'>";
                         if($page > 1) {
                            echo '<li><a href="overview.php?page='.($page - 1).'">Prev</a></li>';
                         }  
                       
                         for($i = 1; $i <= $total_page; $i++) {
                            if($i == $page) {
                                $active = "active";
                            }else {
                               $active = "";
                            }
                            echo '<li class="'.$active.'" ><a href="overview.php?page='.$i.'">'.$i.'</a></li>';
                         }
                         if($total_page > $page)
                         echo '<li><a href="overview.php?page='.($page + 1).'">Next</a></li>';
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