<?php
include '../config.php';


if(empty($_FILES['socail_icon'] ['name'])) {
    $file_name = $_POST['old-social'];

}else{
    $errors = array();

    $file_name = $_FILES['socail_icon'] ['name'];
    $file_size = $_FILES['socail_icon'] ['size'];
    $file_tmp = $_FILES['socail_icon'] ['tmp_name'];
    $file_type = $_FILES['socail_icon'] ['type'];
    $file_ext =  strtolower(end(explode('.',$file_name)));
    $extension = array("jpg", "png", "jpeg");
 
    if(in_array($file_ext, $extension) == false) {
          $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
    }
 
    if($file_size > 2097152) {
           $errors[] = "File size must be 2mb or lower";
    }
 
    if(empty($errors) == true) {
            move_uploaded_file($file_tmp,"../assets/img/social/".$file_name);
    }else{
     print_r($error);
     die();
    }
 
 }

 
 $social_id = mysqli_real_escape_string($conn, $_POST['social_id']);
$social_link = mysqli_real_escape_string($conn, $_POST['social_link']);
$sql = "UPDATE social_media SET social_icon = '{$file_name}', social_link = '{$social_link }' WHERE id = '{$social_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/social_media.php");
}else{
    echo "Query failed";
}





?>