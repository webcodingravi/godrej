<?php

include 'header/header.php';

?>

<section class="overview">
<div class="container">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-12">
                
                <div class="card shadow">

                <?php
          include '../config.php';
    
          $sql = "SELECT * FROM logo";
         
         $result = mysqli_query($conn, $sql) or die("Query failed");
          if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
  
        

        ?>
            
                <form action="update-logo.php" method ="POST" enctype="multipart/form-data">

                    
                      <div class="form-group">
                          <label for="logo">LOGO</label>
                          <input type="file" name="logo" class="form-control mb-3">
                          <img src="../assets/img/logo/<?php echo $row['logo']; ?>" height="100px">
                          <input type="hidden" name="old-logo" value="<?php echo $row['logo']; ?>">
                      </div>
                    
                      <input type="submit"  name="save" class="btn btn-button" value="Update" required />
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

</section>



<!-- overview-2 -->

<section class="overview-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
      <h1 class="text-center mb-5">MENU</h1>
    
      <a href="add-header.php" class="btn btn-button mb-3">Add +</a>
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
                   
                   $sql = "SELECT * FROM header ORDER BY id DESC LIMIT {$offset}, {$limit}";

                    $result = mysqli_query($conn, $sql) or die("Query failed");

                    if(mysqli_num_rows($result) > 0) {
                        
                
                    ?>
                      <table class="table table-bordered">
                      <thead class="bg-secondary text-white">
                          <th>S.No.</th>
                          <th>Menu</th>
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
                              <td><?php echo $row['menu'];?></td>
                           
                              
                               </td>
                              <td class='edit'><a href='update-menu.php?eid=<?php echo $row['id'];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-menu.php?id=<?php echo $row['id'];?>'><i class="fas fa-trash"></i></a></td>
                          </tr>


                          <?php
                           $serial++;
                         }

                        ?>
                      </tbody>
                      
                  
                  </table>

                  <?php
                   }
                   
                       $sql1 = "SELECT * FROM header";

                       $result1 = mysqli_query($conn, $sql1) or die("Query failed");

                       if(mysqli_num_rows($result1) > 0) {
                         $total_records = mysqli_num_rows($result1);
                       
                         $total_page = ceil($total_records / $limit);
                          
                         echo "<ul class='pagination admin-pagination'>";
                         if($page > 1) {
                            echo '<li><a href="header_section.php?page='.($page - 1).'">Prev</a></li>';
                         }  
                       
                         for($i = 1; $i <= $total_page; $i++) {
                            if($i == $page) {
                                $active = "active";
                            }else {
                               $active = "";
                            }
                            echo '<li class="'.$active.'" ><a href="header_section.php?page='.$i.'">'.$i.'</a></li>';
                         }
                         if($total_page > $page)
                         echo '<li><a href="header_section.php?page='.($page + 1).'">Next</a></li>';
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