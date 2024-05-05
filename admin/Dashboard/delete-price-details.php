<?php

include '../config.php';


$price_id = $_GET['id'];

$sql = "DELETE FROM price_details WHERE id = '{$price_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/price.php");
}else{
    echo "<span>Can't Delete the user Record.</span>";
}


mysqli_close($conn);





?>