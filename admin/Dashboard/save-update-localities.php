<?php

include '../config.php';
    
$localities_id = mysqli_real_escape_string($conn, $_POST['localities_id']);
$education = mysqli_real_escape_string($conn, $_POST['education']);
$transport = mysqli_real_escape_string($conn, $_POST['transport']);
$hospital = mysqli_real_escape_string($conn, $_POST['hospital']);
$hotal = mysqli_real_escape_string($conn, $_POST['hotal']);



$sql = "UPDATE localities_details SET education = '{$education}', transport = '{$transport}', hospital = '{$hospital}', hotel = '{$hotal}' WHERE id = '{$localities_id}'";



if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/Localities.php");
}






?>