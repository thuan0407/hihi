
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
            margin: 0 auto;
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;

        }
        form{
            margin-top: 200px;
            width: 500px;
            border: 1px solid black;
            box-shadow: 5px 5px 10px blue;
            padding:50px 20px;
            position: relative;
            left:300px;
            margin-bottom:50px;

        }
        input{
            width: 300px;
            height: 30px;
            border-radius: 10px;
            position: absolute;
            right:90px;
        }
        .dangnhap{
            text-align: center;
        }
        button{
            width: 100px;
            height: 30px;
            border-radius: 5px;
            background-color: rgb(61, 155, 232);
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">User:</label>
        <input type="text" placeholder="Nhập User" required name="user"><br><br>
        <label for="">Password:</label>
        <input type="password" placeholder="Nhập password " required name="pass"><br><br>
        <hr>
        
        <div class="dangnhap">
        <button type="submit" name="dangnhap">Đăng nhập</button>
    </div>
    </form>
    <?php
    if(isset($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if($user == "hoangthuan0407" && $pass == "123456"){
            $_SESSION['user']=$user;
            header("Location: assment.php");

        }
        else{
            echo "vui lòng kiểm tra lại mật khẩu hoặc tên đăng nhâp!";
        }
    }
    ?>
</body>
</html>