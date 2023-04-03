<?php


session_start();

include './Database.php';

$email2 = $_SESSION['email2'];
$password2 = $_SESSION['password2'];

$sql = "select * from form1 where email='$email2' and password='$password2'";
$que=mysqli_query($con,$sql);


if( mysqli_num_rows($que) > 0 )
{
    echo "data comming";
}


if(isset($_POST['submit3']))
{

    $newfname = $_POST['fname3'];
    $newlname = $_POST['lname3'];
    $newpassword = $_POST['password3'];
    



 
    $sql = "update form1 set Fname = '$newfname' , Lname = '$newlname' ,  password = '$newpassword' where email = '$email2' ";
    $que=mysqli_query($con,$sql);

    echo "<script>window.open('./welcome.php','_self')</script>";

}
