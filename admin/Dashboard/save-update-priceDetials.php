<?php

include '../config.php';
    
$price_id = mysqli_real_escape_string($conn, $_POST['price_id']);
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_size = mysqli_real_escape_string($conn, $_POST['product_size']);
$product_price = mysqli_real_escape_string($conn, $_POST['product_price']);



$sql = "UPDATE price_details SET product_name = '{$product_name}', product_size = '{$product_size}', product_price = '{$product_price}' WHERE id = '{$price_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/price.php");
}






?>