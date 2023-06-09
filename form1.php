<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <form class="container mt-5 pt-5a" method="post" action="./process.php">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">First Name :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Last Name :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lname"  >
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"  >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class=" row mb-3">
            <div class="col-md-6">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"  >
            </div>
            <div class="col-md-6">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword"  >
            </div>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>