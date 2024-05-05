<?php
include '../config.php';


if(empty($_FILES['slider'] ['name'])) {
    $file_name = $_POST['old-slider-1'];

}else{
    $errors = array();

    $file_name = $_FILES['slider'] ['name'];
    $file_size = $_FILES['slider'] ['size'];
    $file_tmp = $_FILES['slider'] ['tmp_name'];
    $file_type = $_FILES['slider'] ['type'];
    $file_ext =  strtolower(end(explode('.',$file_name)));
    $extension = array("jpg", "png", "jpeg");
 
    if(in_array($file_ext, $extension) == false) {
          $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
    }
 
    if($file_size > 2097152) {
           $errors[] = "File size must be 2mb or lower";
    }
 
    if(empty($errors) == true) {
            move_uploaded_file($file_tmp,"../assets/img/banner/".$file_name);
    }else{
     print_r($error);
     die();
    }
 
 }


 if(empty($_FILES['slider-2'] ['name'])) {
  $file_name2 = $_POST['old-slider-2'];

}else{
  $errors = array();

  $file_name2 = $_FILES['slider-2'] ['name'];
  $file_size = $_FILES['slider-2'] ['size'];
  $file_tmp = $_FILES['slider-2'] ['tmp_name'];
  $file_type = $_FILES['slider-2'] ['type'];
  $file_ext =  strtolower(end(explode('.',$file_name2)));
  $extension = array("jpg", "png", "jpeg");

  if(in_array($file_ext, $extension) == false) {
        $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
  }

  if($file_size > 2097152) {
         $errors[] = "File size must be 2mb or lower";
  }

  if(empty($errors) == true) {
          move_uploaded_file($file_tmp,"../assets/img/banner/".$file_name2);
  }else{
   print_r($error);
   die();
  }

}



if(empty($_FILES['slider-3'] ['name'])) {
  $file_name3 = $_POST['old-slider-3'];

}else{
  $errors = array();

  $file_name3 = $_FILES['slider-3'] ['name'];
  $file_size = $_FILES['slider-3'] ['size'];
  $file_tmp = $_FILES['slider-3'] ['tmp_name'];
  $file_type = $_FILES['slider-3'] ['type'];
  $file_ext =  strtolower(end(explode('.',$file_name3)));
  $extension = array("jpg", "png", "jpeg");

  if(in_array($file_ext, $extension) == false) {
        $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
  }

  if($file_size > 2097152) {
         $errors[] = "File size must be 2mb or lower";
  }

  if(empty($errors) == true) {
          move_uploaded_file($file_tmp,"../assets/img/banner/".$file_name3);
  }else{
   print_r($error);
   die();
  }

}
 
 

$title = mysqli_real_escape_string($conn, $_POST['title']);
$sub_title = mysqli_real_escape_string($conn, $_POST['sub_title']);
$sql = "UPDATE banner SET title = '{$title}', sub_title = '{$sub_title}', slider_1 = '{$file_name}', slider_2 = '{$file_name2}', slider_3 = '{$file_name3}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}





?>