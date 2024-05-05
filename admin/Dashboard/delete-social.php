<?php
include '../config.php';

$social_id = $_GET['id'];

 
unlink("..assets/img/social/".$row['social_icon']);

$sql = "DELETE FROM social_media WHERE id = {$social_id};";

if(mysqli_multi_query($conn, $sql)) {
    header("Location: {$header}Dashboard/social_media.php");
}else {
    echo "Query failed";
}




?>