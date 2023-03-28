<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="userName">Name</label>
        <input type="text" name="userName" /><br/>
        <label for="userPhone">Phone</label>
        <input type="text" name="userPhone" /><br/>
        <input type="submit" value="Save" name="saveBtn" />
        <input type="submit" value="Clear" name="clearBtn" />
    </form>

    <?php

    if(isset($_POST['saveBtn'])){
        $name = $_POST['userName'];
        $phone = $_POST['userPhone'];

        if($name == null || $phone ==null){
            echo "You need to fil both informations!";
        }else{
            echo $name;
            echo $phone;
        }
        
    }

    if (isset($_POST['clearBtn'])){
        echo "Clear!";
    }



    ?>


</body>
</html>