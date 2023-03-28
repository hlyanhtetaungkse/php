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
<body class="bg-secondary">

    <?php
        $errorName = $errorEmail = $errorPhone = $errorAddress = "";
        $name = $email = $phone = $address = "";


        if(isset($_POST['saveBtn'])){
            if($_POST['name'] == ""){
                $errorName = "Please Enter Your Name";
            }else{
                $name = $_POST['name'];
            }
            if($_POST['email'] == ""){
                $errorEmail = "Please Enter Your Email";
            }else{
                $email = $_POST['email'];
            }
            if($_POST['phone'] == ""){
                $errorPhone = "Please Enter Your Phone Number";
            }else{
                $phone = $_POST['phone'];
            }
            if($_POST['address'] == ""){
                $errorAddress = "Please Enter Your Address";
            }else{
                $address = $_POST['address'];
            }
            if($name != "" && $email != "" && $phone != "" && $address != ""){
                echo $name . "<br>";
                echo $email . "<br>";
                echo $phone . "<br>";
                echo $address. "<br>";
            }
        }
    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-6 bg-info offset-3 shadow">
                <form method="POST">
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        <span class="text-danger"><?php echo $errorName; ?></span>
                    </div>

                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                        <span class="text-danger"><?php echo $errorEmail; ?></span>
                    </div>

                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                        <span class="text-danger"><?php echo $errorPhone; ?></span>
                    </div>

                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Enter Your Address"></textarea>
                        <span class="text-danger"><?php echo $errorAddress; ?></span>
                    </div>

                    <div class="float-end">
                        <button type="submit" name="saveBtn" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>