<?php

    session_start();

    include './Database.php';

    $email2 = $_SESSION['email2'];
    $password2 = $_SESSION['password2'];


    $sql = "select * from form1 where email='$email2' and password='$password2'";
    $que=mysqli_query($con,$sql);


    $sql = "Delete from form1 where email = '$email2' and password = '$password2'";
    $que=mysqli_query($con,$sql);

    echo "<script>window.open('./login.php','_self')</script>";
?>