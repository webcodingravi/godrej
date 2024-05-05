<?php
include '../config.php';

$heading = mysqli_real_escape_string($conn, $_POST['heading']);
$paragraph = mysqli_real_escape_string($conn, $_POST['paragraph']);
$sql = "UPDATE overview_1 SET heading = '{$heading}', paragraph = '{$paragraph}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}



?>