<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Store</h3>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="userProfile" />
        <br>
        <input type="submit" name="storeProfile" value="Save" />
    </form>

    <?php

    if (isset($_POST['storeProfile'])){
        // echo "<pre>";
        // print_r($_FILES);

        $imgName= $_FILES['userProfile']['name'];
        $tmpName= $_FILES['userProfile']['tmp_name'];
        // print_r($imgName);
        // echo "<br>";
        // print_r($tmpName);

                        // $target_file = storage location . file name
        $target_file = 'image/'. $imgName;
                        // file_tmp_name, $target file
        move_uploaded_file($tmpName, $target_file);

        echo "Sucess Uploading...";



    }

    ?>

</body>
</html>