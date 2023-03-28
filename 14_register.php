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
                                <label for="name">User Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control">
                            </div>
                            <button type="submit" name="register" class="btn btn-success float-end">Register</button>
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

    function checkStrongPassword($password){

        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if(preg_match('/[A-Z]/', $password)){
            $upperStatus = true; 
        }

        if(preg_match('/[a-z]/', $password)){
            $lowerStatus = true; 
        }

        if(preg_match('/[0-9]/', $password)){
            $numberStatus = true; 
        }

        if(preg_match('/[!@#$%^&*]/', $password)){
            $specialStatus = true; 
        }

        if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
            return true;
        }else{
            return false;
        }
    }

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($name != "" && $email != "" && $password != "" && $confirmPassword != ""){
            if(strlen($password) >= 6 && strlen($confirmPassword) >= 6){
                if($password == $confirmPassword){
                   $status = checkStrongPassword($password);

                   if($status = true){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

                    echo "Registration Success!";
                    // echo $_SESSION['email'];
                    // echo $_SESSION['password'];
                   }else{
                    echo "Your password is not strong.(Must contain A-Z, a-z, 0-9, !@#$%^&*)";
                   }
                }else{
                    echo "Password must be same";
                }
            }else{
                echo "Password length must be 6 or above ";
            }
        }else{
            echo "You need to fill above informations!";
        }
    }
?>

</body>
</html>