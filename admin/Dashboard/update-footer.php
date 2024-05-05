<?php

include '../config.php';

$footer = mysqli_real_escape_string($conn, $_POST['footer']);

$sql = "UPDATE footer SET footer = '{$footer}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}






?>