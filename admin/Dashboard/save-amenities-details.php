<?php
include '../config.php';


if(empty($_FILES['post_image'] ['name'])) {
    $file_name = $_POST['old-image'];

}else{
    $errors = array();

    $file_name = $_FILES['post_image'] ['name'];
    $file_size = $_FILES['post_image'] ['size'];
    $file_tmp = $_FILES['post_image'] ['tmp_name'];
    $file_type = $_FILES['post_image'] ['type'];
    $file_ext =  strtolower(end(explode('.',$file_name)));
    $extension = array("jpg", "png", "jpeg");
 
    if(in_array($file_ext, $extension) == false) {
          $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
    }
 
    if($file_size > 2097152) {
           $errors[] = "File size must be 2mb or lower";
    }
 
    if(empty($errors) == true) {
            move_uploaded_file($file_tmp,"../assets/img/amenitites/".$file_name);
    }else{
     print_r($error);
     die();
    }
 
 }

 
 $amenities_id = mysqli_real_escape_string($conn, $_POST['post_id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$sql = "UPDATE amenities_details SET title = '{$title}', post_image = '{$file_name}' WHERE id = '{$amenities_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/amenities.php");
}else{
    echo "Query failed";
}





?>