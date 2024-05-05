<?php
include '../config.php';

$web_title = mysqli_real_escape_string($conn, $_POST['web_title']);
$meta_description = mysqli_real_escape_string($conn, $_POST['meta_description']);
$meta_keywords = mysqli_real_escape_string($conn, $_POST['meta_keywords']);
$sql = "UPDATE web_meta SET web_title = '{$web_title}', meta_desc = '{$meta_description}', meta_keywords = '{$meta_keywords}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}





?>