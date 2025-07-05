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
    <form action=""method="post">
    user <input type="text" name="user"><br><br>
    password <input type="password" name="pass"><br><br>

    <button type="submit" name="gui">gui</button>
    </form>

    <?php
    if(isset($_POST['gui'])){
        $user =$_POST['user'];
        $pass = $_POST['pass'];
        if($user == "thuan" && $pass ==123456){
            $_SESSION['user']=$user;
            header("Location: hiha.php");
        }
        else{
            echo "đăng nhập thất bại!";
        }
    }
    ?>
    
</body>
</html>