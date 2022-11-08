<?php
include "conn.php";
?>
<?php

    // print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $in = mysqli_query($conn, "INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES ('NULL', '$name', '$email', '$subject', '$message')");

if($in == true){
    header('location:index.php');
}else{
	header('location:contact.php');
}

// var_dump($in);
// print_r($_POST);
?>
