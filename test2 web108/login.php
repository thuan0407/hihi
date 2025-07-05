<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border:1px solid black;
            width:400px;
            padding:20px;
        }
    </style>

</head>
<body>
    <form action="" method="post">
        User <input type="text" name="user"> <br><br>

        Password <input type="password" name="pass"><br><br>

        <button type="submit" name="gui">Gửi</button>
    </form>
    <?php
    if(isset($_POST['gui'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if($user == "edu01" && $pass == 123456){
            $_SESSION['user']=$user;
            header("Location: course.php");
        }
        else{
            echo "Đăng nhập không thành công!";
        }
    }
    ?>
</body>
</html>