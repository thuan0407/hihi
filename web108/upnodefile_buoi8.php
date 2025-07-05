<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UPLOADFILE</h1>
    <form action="" method="post" enctype="multipart/form-data">
        tên file <input type="file" name="file"><br>
        <input type="submit" value="upfile" name="btnFile">
    </form>
    <?php
    if(isset($_POST['btnFile'])){
        echo "<pre>";
        print_r($_FILES['file']);

        $name=$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        move_uploaded_file($tmp,"upload/".$name);
    }
    ?>
</body>
</html>

