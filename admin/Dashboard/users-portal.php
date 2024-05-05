<?php

include 'header/header.php';

?>



<div class="admin-portal">
    <div class="conatiner">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-12">

        <a href="add-admin.php" class="btn btn-button mb-3">Add Users +</a>
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
                   
                   $sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT {$offset}, {$limit}";

                    $result = mysqli_query($conn, $sql) or die("Query failed");

                    if(mysqli_num_rows($result) > 0) {
                        
                
                    ?>
                      <table class="table table-bordered">
                      <thead class="bg-secondary text-white">
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
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
                              <td><?php echo $row['first_name']. " " .$row['last_name'];?></td>
                              <td><?php echo $row['username'];?></td>
                              <td><?php 
                                if($row['role']) {
                                    echo "Admin";
                                }else {
                                    echo "Normal";
                                }
                              
                               ?></td>
                              <td class='edit'><a href='update-user.php?eid=<?php echo $row['user_id'];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php?id=<?php echo $row['user_id'];?>'><i class="fas fa-trash"></i></a></td>
                          </tr>


                          <?php
                           $serial++;
                         }

                        ?>
                      </tbody>
                      
                  
                  </table>

                  <?php
                   }
                   
                       $sql1 = "SELECT * FROM user";

                       $result1 = mysqli_query($conn, $sql1) or die("Query failed");

                       if(mysqli_num_rows($result1) > 0) {
                         $total_records = mysqli_num_rows($result1);
                       
                         $total_page = ceil($total_records / $limit);
                          
                         echo "<ul class='pagination admin-pagination'>";
                         if($page > 1) {
                            echo '<li><a href="./users-portal.php?page='.($page - 1).'">Prev</a></li>';
                         }  
                       
                         for($i = 1; $i <= $total_page; $i++) {
                            if($i == $page) {
                                $active = "active";
                            }else {
                               $active = "";
                            }
                            echo '<li class="'.$active.'" ><a href="./users-portal.php?page='.$i.'">'.$i.'</a></li>';
                         }
                         if($total_page > $page)
                         echo '<li><a href="./users-portal.php?page='.($page + 1).'">Next</a></li>';
                          echo " </ul>";

                       }

                     ?>
</tbody>

</table>

</div>
</div>
</div>
        </div>


</div>

<?php
include 'footer/footer.php'; ?>