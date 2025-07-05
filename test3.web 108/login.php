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
    <form action="" method="post">
        User <input type="text" name="user"><br><br>
        Password <input type="password" name="pass"><br><br>
        <button type="submit" name="dn">Đăng nhập</button>
    </form>
    <?php
    if(isset($_POST['dn'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if($user == "tour01" && $pass ==12345678){
            $_SESSION['user']=$user;
            header("Location: tours.php");
        }
        else{
            echo "đăng nhập thất bại!";
        }
    }
    ?>
</body>
</html>