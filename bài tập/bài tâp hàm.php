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
        div{
            width: 600px;
            border:1px solid black;

        }
        form{
            border:1px1px;
        }
    </style>

</head>
<body>
    <div>
    <h1>Đăn g ký thành viên </h1>
    <form action="" method="post">
        <label for="">User</label>
        <input type="text" name="user"><br><br>

        <label for="">mật khẩu</label>
        <input type="password" name="pass"><br><br>

        <label for="">họ tên</label>
        <input type="text" name="hoten"><br><br>

        <label for="">ngày sinh</label>
        <input type="date"  name="ngay"><br><br>

        <label for="">sô điện thoại</label>
        <input type="number" name="sdt"><br><br>

        <label for="">Email</label>
        <input type="email" name="email"><br><br>

     <input type="submit" value="gui" name="gui">
        </div>




    </form>
    <?php
    if(isset($_POST['gui'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $hoten=$_POST['hoten'];
        $ngay=$_POST['ngay'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
    

        function thong_tin($user,$pass,$hoten,$ngay,$sdt,$email){
            if(empty($user) || empty($pass) || empty(sdt)){
                return "các trường hợp , mật khẩu và số điện thoại là bắt buộc";
            }
        }
        return [
            "user"=>$user,
            "pass"=>$pass,
            "hoten"=>$hoten ,
            "ngay"=>$ngay,
            "sdt"=>$sdt,
            "email"=>$email
            
        ];

        $result=thong_tin($suer,$pass,$hoten,$ngay,$sdt,$email);

        if(is_array($result)){
            echo "thông tin dăng nhập thành công";
            echo "user: ". htmlspecialchars($result["user"])."<br>";
            echo "pass: ". htmlspecialchars($result["pass"])."<br>";
            echo "ngay: ". htmlspecialchars($result["ngay"])."<br>";
            echo "sdt: ". htmlspecialchars($result["sdt"])."<br>";
            echo "email: ". htmlspecialchars($result["email"])."<br>";
        }
    }


    ?>
</body>
</html>