<?php
include '../config.php';

$localities_id = $_GET['id'];

$sql = "DELETE FROM localities_details WHERE id = '{$localities_id}'";

if(mysqli_multi_query($conn, $sql)) {
    header("Location: {$header}Dashboard/Localities.php ");
}else {
    echo "Query failed";
}




?>