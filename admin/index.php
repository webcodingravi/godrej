<?php

include 'config.php';

session_start();

if(isset($_SESSION['username'])) {
    header("Location: {$header}Dashboard/Deshboard.php");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin</title>
   <!-- icon -->
   <link rel="icon" type="image/png" href="assets/img/user.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
   <!-- font awesome 5 icon -->
  <!-- boostrap-5 CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css" type="text/css">
  <!-- CUSSTOM CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css">

<body>
  
<section class="admin-login-form">
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4 col-lg-4 col-12">

    <img src="assets/img/user.png" width="160" class="img-fluid" alt="">
      <h3 class="heading">Admin</h3>

        <!--Form Start -->
                          <div class="card">
                          <form action="" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Please Enter User Name.." required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Please Enter Password.." required="">
                            </div>
                            <input type="submit" name="login" class="btn btn-login" value="Login Now">
                        </form>

                        <?php
                         if(isset($_POST['login'])) {
                            include 'config.php';
                            if(empty($_POST['username'] || empty($_POST['password']))) {

                                echo '<div class="alert alert-danger">All Fields must entered.</div>';
                                     die();

                            }else {
                                $username = mysqli_real_escape_string($conn, $_POST['username']);
                                $password = md5($_POST['password']);
    
                                $sql = "SELECT user_id, username, role FROM user WHERE username = '{$username}' AND password = '{$password}'";
    
                                $result = mysqli_query($conn, $sql) or die("Query failed");
    
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        session_start();
    
                                        $_SESSION["username"] = $row['username'];
                                        $_SESSION["user_id"] = $row['user_id'];
                                        $_SESSION["user_role"] = $row['role'];
    
                                    header("Location: {$header}Dashboard/Deshboard.php");
                            }
                          

                                
                            }else {
                                echo '<div class="alert alert-danger">Username or Password are not matched.</div>';
                            }

                         }
                        }

                        ?>

                        </div> 
                         <!--/Form  End -->
                     


</div>
</div>
    </div>
  


</section>
           





<!-- boostrap-5 js -->
<script src="bootstrap/bootstrap.min.js"></script>
<!-- cusstom js -->
<script src="js/main.js"></script>
</body>
</html>