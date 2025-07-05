<?php
session_start();
if(isset($_POST['gui'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == "admin" && $pass == 123456){
        $_SESSION['user']=$user;
        header("Location: bill.php");
    }
    else{
        echo "Đăng nhập không thành công!";
    }
}
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
        User <input type="text" name="user">
        <br><br>
        Password <input type="password" name="pass">
        <br><br>
        <button type="submit" name="gui">Gửi</button>
    </form>
</body>
</html>