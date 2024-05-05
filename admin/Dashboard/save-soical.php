<?php
include '../config.php';

if(isset($_FILES['fileToUpload'])) {
    $errors = array();

   $file_name = $_FILES['fileToUpload'] ['name'];
   $file_size = $_FILES['fileToUpload'] ['size'];
   $file_tmp = $_FILES['fileToUpload'] ['tmp_name'];
   $file_type = $_FILES['fileToUpload'] ['type'];
   $file_ext =  strtolower(end(explode('.',$file_name)));
   $extension = array("jpg", "png", "jpeg");

   if(in_array($file_ext, $extension) == false) {
         $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
   }

   if($file_size > 2097152) {
          $errors[] = "File size must be 2mb or lower";
   }

   $new_name = time().basename($file_name); 
   $target = "../assets/img/amenitites/".$new_name;

   $image_name = $new_name;
   

   if(empty($errors) == true) {
           move_uploaded_file($file_tmp, $target);
   }else{
    print_r($error);
    die();
   }


}


$social_link = mysqli_real_escape_string($conn, $_POST['social_link']);
$sql = "INSERT INTO social_media(social_icon, social_link) VALUES ('{$new_name}', '{$social_link}')";



if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/social_media.php");
}else{
    echo "<div class='alert alert-danger'>Query failed</div>";
}







?>