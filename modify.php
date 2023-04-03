<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <form class="container mt-5 pt-5a" method="post" action="./modifyprocess.php">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">New First Name :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname3">
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">New Last Name :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lname3">
            </div>
        </div>
        <div class=" row mb-3">
            <div class="col">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password3">
            </div>
        </div>
        <input type="submit" name="submit3" value="submit" class="btn btn-primary">
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

