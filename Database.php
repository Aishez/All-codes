<?php



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $con = mysqli_connect($servername,$username,$password,$database);
    
    if(!$con)
    {
        die("error detected : Connection to database failed");
    }
    else
    {
        // echo "connection ok";
    }

?>