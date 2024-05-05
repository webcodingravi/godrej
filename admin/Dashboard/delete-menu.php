<?php
include '../config.php';

$menu_id = $_GET['id'];

$sql = "DELETE FROM header WHERE id = '{$menu_id}'";

if(mysqli_multi_query($conn, $sql)) {
    header("Location: {$header}Dashboard/header_section.php");
}else {
    echo "Query failed";
}




?>