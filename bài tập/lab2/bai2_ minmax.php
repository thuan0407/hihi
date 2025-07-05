<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Nhập min:</label>
    <input type="text" name="min">
    <br>

    <label for="">Nhập max:</label>
    <input type="text"name="max">
    <br>

    <input type="submit" value="gui" name="gui">
    <br>

    </form>
    <?php
    if(isset($_POST['gui'])){
    $min=$_POST['min'];
    $max=$_POST['max'];
    $i=$min;
    for($i=$min;$i<=$max;$i++){
        echo "số ".$i ."   ";
    }
    echo "<br>";
}
    
    echo "các số chia hết cho 5 hoặc 7 là:";
        for ($i = $min; $i <= $max; $i++) {
            if ($i % 5 == 0 || $i % 7 == 0) {
                echo "$i  ";
            }
        }
        echo "<br>";
    $sum=0;
    for($i=$min;$i<=$max;$i++){
       if($i%2==0){
        $sum+=$i;
       }
        }
        echo "tổng các số chẵn là:".$sum;

    echo "<br>";
    $sumle=0;
    for($i=$min;$i<=$max;$i++){
        if($i%2!=0){
         $sumle+=$i;
        }
         }
         echo "tổng các số lẻ là:".$sumle;
         


    
   


    
    ?>
   
</body>
</html>