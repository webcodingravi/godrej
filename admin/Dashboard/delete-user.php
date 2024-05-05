<?php

include '../config.php';


$user_id = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = '{$user_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/users-portal.php");
}else{
    echo "<span>Can't Delete the user Record.</span>";
}


mysqli_close($conn);





?>