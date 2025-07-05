<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >


        <label for="">user</label>
        <input type="text" name="tendn" required><br><br>

        <label for="">pass</label>
        <input type="password" name="pass"><br><br>

        <label for="">họ tên </label>
        <input type="text" name="hoten"><br><br>

        <label for="">ngày sinh</label>
        <input type="date" name="ngaysinh"><br><br>

        <label for="">số điện thoại </label>
        <input type="text" name="sdt"><br><br>

        <label for="">email</label>
        <input type="email" name="email"><br><br>

        <input type="submit" value="Gửi" name="gui"><br><br>

       
    </form>

    <?php
    function tra_ve($tendn, $pass, $ten, $ngaysinh, $sdt, $email) {
        echo "<br> User: " . htmlspecialchars($tendn);
        echo "<br> Pass: " . htmlspecialchars($pass);
        echo "<br> Họ và tên: " . htmlspecialchars($ten);
        echo "<br> Ngày sinh: " . htmlspecialchars($ngaysinh);
        echo "<br> Số điện thoại: " . htmlspecialchars($sdt);
        echo "<br> Email: " . htmlspecialchars($email);
    }


    if(isset($_POST['gui'])){
        $tendn = $_POST['tendn'];
        $pass =$_POST['pass'];
        $ten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email']; 
}
tra_ve($tendn, $pass, $ten, $ngaysinh, $sdt, $email);
    ?>

    
</body>
</html>