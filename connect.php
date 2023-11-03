<?php
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost','root','','test1');
    if($conn){
        echo"success";
    }
    else{
        echo"no";
    }

    $conn->close();
?>

