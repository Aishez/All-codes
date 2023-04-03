<?php

session_start();

    include './Database.php';

    if(isset($_POST['submit2']))
    {
        $email2 = $_POST['email2'];
        $password2 = $_POST['password2'];

        
        $sql = "select * from form1 where email='$email2' and password='$password2'";
        $que=mysqli_query($con,$sql);





        if( mysqli_num_rows($que) > 0)
        {
            echo "<script>alert('Login OK')</script>";
        
            $row = mysqli_fetch_assoc($que);
            $fname = $row['Fname'];
            $lname = $row['Lname'];


            $_SESSION['email2'] = $email2;
            $_SESSION['password2'] = $password2;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            header("Location: ./welcome.php");
            exit;

            // echo "<script>window.open('./login.php','_self')</script>";
        }
        else
        {
            echo "<script> alert('Wrong Username or password')</script>";
            echo "<script>window.open('./login.php','_self')</script>";
        }
    }

?>