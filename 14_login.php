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
    <div class="container mt-5">
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
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary float-end">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php
    session_start();

    if(isset($_POST['login'])){
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];

        if($userEmail !='' || $userPassword != ''){
            if($userEmail == $_SESSION['email'] && password_verify($userPassword,$_SESSION['password'])){
                echo "login Success";
            }else{
                echo "login Failed! Try Again...";
            }
        }else{
            echo "Enter your email and password!";
        }

    }



?>

</body>
</html>