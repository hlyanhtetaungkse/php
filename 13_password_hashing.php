<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login Form</h3>
    <form method="POST">
        <label>Email</label><input type="email" name="userEmail" /><br/>
        <label>Password</label><input type="password" name="userPassword" /><br/>
        <input type="submit" name="loginBtn" value="Log In" />
    </form>




    <?php
    /*
        $email = "honey@gmail.com";
        $password = "hlyan123";

        if(isset($_POST['loginBtn'])){
            $userEmail = $_POST['userEmail'];
            $userpassword = $_POST['userPassword'];

            if($email == $userEmail && $password == $userpassword){
                echo 'Login Sucess!';
            }else{
                echo 'Login Failed! Please Try Again!';
            }
        }

        */

        // Hash Password
        $email ='honey@gmail.com';
        // $password = "hlyan123";
        // $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        // echo $password . "<br>";
        // echo $hashPassword . "<br>";//$2y$10$KtCg9uMpe5lbHJxSDLEBb.Bel0yfItkNcA55deguqvS/hurdDHoLe
        // var_dump(password_verify($password, $hashPassword));// check password

        $password = '$2y$10$KtCg9uMpe5lbHJxSDLEBb.Bel0yfItkNcA55deguqvS/hurdDHoLe' ;
        //hlyan123

        if(isset($_POST['loginBtn'])){
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];

            if($email == $userEmail && password_verify($userPassword,$password)){
                echo 'Login Sucess!';
            }else{
                echo 'Login Failed! Please Try Again!';
            }
        }
  

        

    ?>
</body>
</html>