<?php
include '../config.php';


if(empty($_FILES['background'] ['name'])) {
    $file_name = $_POST['old-background'];

}else{
    $errors = array();

    $file_name = $_FILES['background'] ['name'];
    $file_size = $_FILES['background'] ['size'];
    $file_tmp = $_FILES['background'] ['tmp_name'];
    $file_type = $_FILES['background'] ['type'];
    $file_ext =  strtolower(end(explode('.',$file_name)));
    $extension = array("jpg", "png", "jpeg");
 
    if(in_array($file_ext, $extension) == false) {
          $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
    }
 
    if($file_size > 2097152) {
           $errors[] = "File size must be 2mb or lower";
    }
 
    if(empty($errors) == true) {
            move_uploaded_file($file_tmp,"../assets/img/price/".$file_name);
    }else{
     print_r($error);
     die();
    }
 
 }




 

$heading = mysqli_real_escape_string($conn, $_POST['heading']);
$paragraph = mysqli_real_escape_string($conn, $_POST['paragraph']);

$sql = "UPDATE price_1 SET heading = '{$heading}', pargraph = '{$paragraph}', background = '{$file_name}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}





?>