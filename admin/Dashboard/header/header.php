
<?php
include '../config.php';
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: {$header}index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin / Dashboard</title>
   <!-- icon -->
   <link rel="icon" type="image/png" href="../assets/img/logo/Godrej_Logo.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
   <!-- font awesome 5 icon -->
  <!-- boostrap-5 CSS -->
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" type="text/css">
  <!-- CUSSTOM CSS -->
  <link rel="stylesheet" href="../css/style.css" type="text/css">
<body>


<!-- header section -->

<section class="header">
    <div class="container-fluid deshboard-header">
  <div class="row">
  <div class="col-lg-6 col-md-6 col-12">
 
   <a href=""><img src="../assets/img/logo/Godrej_Logo.png" width="100" class="img-fluid" alt="" /></a>
   <a href="Deshboard.php"><i class="fas fa-home home-icon text-white"></i></a>
  
</div>
<div class="col-lg-6 col-md-6 col-12">

    <div class="header-icon text-white">
      <a href="./logout.php"><i class="fas fa-power-off"></i> </a> 

      <div class="user_name">
        <img src="../assets/img/user_img.png" width="50" style="cursor:pointer;">
    
      <!-- <i class="fas fa-user" style="cursor:pointer;"></i>  -->
<span>Welcome, <?php echo $_SESSION["username"];?></span></div>

</div>
 
    </div>

</div>
</div>

</section>


