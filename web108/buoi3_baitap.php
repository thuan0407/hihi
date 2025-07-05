<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Bài 1. Nhập vào 1 số x. Đưa ra màn hình tổng các số nhỏ hơn x. -->
    <form action=""method=post>
        <label for=""><h1>Bài 1:</h1></label>
        <label for="">nhâp số:</label>
        <input type="text" name="so">
        <input type="submit" value="gui" name="gui">
    </form>

    <?php
    if(isset($_POST['gui'])){
    $so=$_POST['so'];
    $i=1;
    $sum=0;
    for($i=1;$i<$so;$i++){
        $sum+=$i;
    }
    echo "<br>";
    echo "tổng số nhỏ hơn $so là: $sum ";
}
    
    ?>
    <!-- Bài 2. Nhập vào 2 số min và max
-	In ra các số từ min tới max
-	In ra trung bình cộng của các số tự nhiên chia hết cho 5 từ min tới max
 -->

    <form action="" method=post>
        <label for=""><h1>bài 2:</h1></label>
        <label for="">nhập min:</label> 
        <input type="text" name="min"> 
        <label for="">Nhập max:</label>
        <input type="text" name="max">

        <input type="submit" value="GUI" name="gui">
    </form>

    <?php
    
    if(isset($_POST['gui'])){
        $min=$_POST['min'];
        $max=$_POST['max'];
        $i=$min;
        echo"các số từ $min đến $max là:";
        for($i=$min;$i<=$max;$i++){
            echo" $i ";
           
        }

        for($i=$min;$i<=$max;$i++){
            if($i%5==0){
                $sum+=$i;
            }
           
        }
        echo "<br>";
        
        echo "  Tổng các sô từ $min đến $max chia hết cho 5 là $sum";

        
    }


    ?>
    
</body>
</html>
