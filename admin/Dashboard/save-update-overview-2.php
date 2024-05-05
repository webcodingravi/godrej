<?php

include '../config.php';
    
$overview_id = mysqli_real_escape_string($conn, $_POST['overview_id']);
$overview_2 = mysqli_real_escape_string($conn, $_POST['overview-2']);



$sql = "UPDATE overview_2 SET overview_contact = '{$overview_2 }' WHERE id = '{$overview_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/overview.php");
}






?>