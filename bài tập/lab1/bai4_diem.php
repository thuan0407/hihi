<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method=post>
        <label for="">Nhập điểm:</label>
        <input type="text" name="diem">
        <input type="submit" value="gui" name="gui">

    </form>

    <?php
    if(isset($_POST['gui'])){
        $diem=$_POST['diem'];
        if($diem<0 || $diem>10){
            echo "Nhập số sai";
        }
        else if($diem>=9){
            echo "xuất sắc";
        }
        else if($diem>=8){
            echo "gioi";

        }
        else if($diem>=6.5){
            echo "khá";
        }
        else if($diem>=5){
            echo "trung bình";
        }
        else{
            echo "yếu kém";
        }
    }
    ?>


</body>
</html>