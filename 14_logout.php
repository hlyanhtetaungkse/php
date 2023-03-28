<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-info" style="
height:100vh;
display:flex;
justify-content:center;
align-items:center;">
    <div class="container  mt-5">
        <div class="row">
            <div class="col-6">
                <div class="text-center">
                    <a href="14_login.php">
                        <button type="button" class="btn btn-lg btn-primary text-white" style="width:200px;">Login</button>
                    </a>
                </div>
                <div class="text-center my-3">
                    <a href="14_register.php">
                        <button type="button" class="btn btn-lg btn-success text-white" style="width:200px;">Register</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="14_logout.php">
                        <button type="button" class="btn btn-lg btn-danger text-white" style="width:200px;">Logout</button>
                    </a>
                </div>
            </div>

            <div class="col-6">
                
            <div class="alert alert-danger text-center fw-bold" role="alert">
                 Logout Sucess!
            </div>
              
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php
    session_start();
    session_destroy();
?>

</body>
</html>