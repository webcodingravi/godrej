<?php

include '../config.php';


$overview_id = $_GET['id'];

$sql = "DELETE FROM overview_2 WHERE id = '{$overview_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/overview.php");
}else{
    echo "<span>Can't Delete the user Record.</span>";
}


mysqli_close($conn);





?>