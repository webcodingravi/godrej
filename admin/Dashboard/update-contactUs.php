<?php

include '../config.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

$sql = "UPDATE contact_us SET email_id = '{$email}', phone_n = '{$phone}', address = '{$address}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}/Dashboard/Deshboard.php");
}else{
    echo "Query failed";
}






?>