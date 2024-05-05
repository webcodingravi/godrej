<?php
include '../config.php';


if(empty($_FILES['logo'] ['name'])) {
    $file_name = $_POST['old-slider-1'];

}else{
    $errors = array();

    $file_name = $_FILES['logo'] ['name'];
    $file_size = $_FILES['logo'] ['size'];
    $file_tmp = $_FILES['logo'] ['tmp_name'];
    $file_type = $_FILES['logo'] ['type'];
    $file_ext =  strtolower(end(explode('.',$file_name)));
    $extension = array("jpg", "png", "jpeg");
 
    if(in_array($file_ext, $extension) == false) {
          $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
    }
 
    if($file_size > 2097152) {
           $errors[] = "File size must be 2mb or lower";
    }
 
    if(empty($errors) == true) {
            move_uploaded_file($file_tmp,"../assets/img/logo/".$file_name);
    }else{
     print_r($error);
     die();
    }
 
 }




$sql = "UPDATE logo SET logo = '{$file_name}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/header_section.php");
}else{
    echo "Query failed";
}





?>