<?php

include './Database.php';

if (isset($_POST['submit'])) 
{
    
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if( $cpassword == $password && strlen($password) >= 8)
    {
        $chk = "";
        foreach ($password as $chk1) 
        {
            $chk.=$chk1.",";
        }
        $sql = "insert into form1(Fname,Lname,email,password) values('$Fname' ,'$Lname','$email','$password')";
    
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('new record inserted')</script>";
            echo "<script>window.open('./form1.php','_self')</script>";
        }
        else
        {
            echo "error:" .mysqli_error($con);
        }
        mysqli_close(($con));
    }

    else if($cpassword == $password && strlen($password) < 8)
    {
        echo "<script>alert('WEAK PASSWORD : Should be atleast 8 character')</script>";
        echo "<script>window.open('./form1.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('PASSWORD NOT MATCHED')</script>";
        echo "<script>window.open('./form1.php','_self')</script>";
    }
}
?>