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
        body{
            width: 1200px;
            margin:0 auto;
        }
        form{
            width: 400px;
            border:1px solid black;
            padding:20px;
            box-shadow: 10px 10px 10px blue;
            
        }
    </style>
</head>
<body>
    <form action=""method="post">
        User <input type="text" name="user"><br><br>
        Password <input type="password" name="pass"><br><br>

        <button type="submit" name="gui">Gửi</button>
    </form>

    <?php
    if(isset($_POST['gui'])){
        $user = $_POST['user'];
        $pass = $_POST['password'];
        if($user == "hoangthuan0407" && $pass = 123456){
            $_SESSION['user'] = $user;
            header("Location: lab56_2.php");
        }
        else{
            echo "đăng nhập không thành công";
        }
    }
    ?>


</body>
</html>