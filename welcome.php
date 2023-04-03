<?php

session_start();
require_once('./Database.php');

$email2 = $_SESSION['email2'];
$password2 = $_SESSION['password2'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

// $query = "select * from form1 where email = $email2 and password = $password2";
// $result = mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<h1 style="margin-left: 45%; margin-top:2%">Welcome</h1>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center"> Your Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Password</td>
                                <td> Edit </td>
                                <td> Delete </td>
                            </tr>
                            <tr>

                                <td> <?php echo $fname  ?> </td>
                                <td> <?php echo $lname  ?> </td>
                                <td> <?php echo $email2  ?> </td>
                                <td> <?php echo $password2  ?> </td>

                                <td><a href="./modify.php" class="btn btn-primary">Edit</a></td>
                                <td><a href="./delete.php" class="btn btn-danger">Delete</a></td>

                            </tr>
                        </table>

                        <a href="./login.php">
                            <button class="btn btn-danger" > Log out</button>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>