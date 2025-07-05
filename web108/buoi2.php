<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- có hai cách cơ bản để đẩy dữ liệu lên server:GET và POS -->
    <form action="" method="post">
        <h1>Thông tin sinh viên</h1>
        <label for="">Họ và tên </label> <input type="text"name="ten"><br><br>

        <label for="">Tuổi</label> <input type="text" name="tuoi"> <br><br>

        <input type="submit" value="GUI" name="guitt"> <br><br>

    </form>
     <?php
    // if(isset($_GET['guitt'])){
    //     $name=$_GET['ten'];
    //     $tuoi=$_GET['tuoi'];
    //     echo "chào bạn $name năm nay bạn đã $tuoi rồi đấy";
    // }
    if(isset($_POST['guitt'])){
        $name=$_POST['ten'];
        $tuoi=$_POST['tuoi'];
        echo "chào bạn $name năm nay bạn đã $tuoi rồi đấy!";
    }
    
    

?>  

</body>
</html>

