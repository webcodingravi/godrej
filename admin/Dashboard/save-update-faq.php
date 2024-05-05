<?php

include '../config.php';
    
$faq_id = mysqli_real_escape_string($conn, $_POST['faq_id']);
$question = mysqli_real_escape_string($conn, $_POST['question']);
$answer = mysqli_real_escape_string($conn, $_POST['answear']);



$sql = "UPDATE faq SET question = '{$question}', answer = '{$answer}' WHERE id = '{$faq_id}'";

if(mysqli_query($conn, $sql)) {
    header("Location: {$header}Dashboard/faq.php");
}






?>