<?php
include '../config.php';

$post_id = $_GET['id'];

 
unlink("..assets/img/amenitites/".$row['post_img']);

$sql = "DELETE FROM amenities_details WHERE id = {$post_id};";

if(mysqli_multi_query($conn, $sql)) {
    header("Location: {$header}Dashboard/amenities.php");
}else {
    echo "Query failed";
}




?>