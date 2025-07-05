<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>đăng nhập</h1>
    <form action="" method="post">
        user <input type="text" name="user"><br>
        pass <input type="text" name="pass"><br>
        <input type="submit" value="đăng nhập" name="gui">
    </form>
    <?php
    if(isset($_POST["gui"])){
        $user= $_POST["user"];
        $pass = $_POST["pass"];
        if($user =="thuan0407" && $pass=="123456"){
            $_SESSION["user"]=$user;
            header("Location:thu.php");
        }
        else{
            echo "không đăng nhập được";
        }
    }
    ?>
</body>
</html>