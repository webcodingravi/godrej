<?php

include '../config.php';
    
$menu_id = mysqli_real_escape_string($conn, $_POST['menu_id']);
$menu = mysqli_real_escape_string($conn, $_POST['header_menu']);




$sql = "UPDATE header SET menu = '{$menu}' WHERE id = '{$menu_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/header_section.php");
}






?>