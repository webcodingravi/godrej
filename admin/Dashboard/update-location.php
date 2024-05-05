<?php
include '../config.php';


if(empty($_FILES['location_map'] ['name'])) {
    $file_name = $_POST['old_location'];

}else{
    $errors = array();

    $file_name = $_FILES['location_map'] ['name'];
    $file_size = $_FILES['location_map'] ['size'];
    $file_tmp = $_FILES['location_map'] ['tmp_name'];
    $file_type = $_FILES['location_map'] ['type'];
    $file_ext =  strtolower(end(explode('.',$file_name)));
    $extension = array("jpg", "png", "jpeg");
 
    if(in_array($file_ext, $extension) == false) {
          $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
    }
 
    if($file_size > 2097152) {
           $errors[] = "File size must be 2mb or lower";
    }
 
    if(empty($errors) == true) {
            move_uploaded_file($file_tmp,"../assets/img/map/".$file_name);
    }else{
     print_r($error);
     die();
    }
 
 }


 
 
 

$header = mysqli_real_escape_string($conn, $_POST['heading_location']);

$sql = "UPDATE location_map SET heading = '{$header}', location_map = '{$file_name}'";


if(mysqli_query($conn, $sql)) {
    header("Location: http://localhost/admin//Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}





?>