<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // cách tạo và in ra hằng số
    echo '<pre>';
    const PI=3.14;
    define('Hang_sok','z30');

    echo PI . PHP_EOL;
    echo Hang_sok .PHP_EOL;
    ?>

    <!-- vòng lặp có ba loại +lặp không biết trước số lần lặp (while / do while )
                        +lặp biết trước số lần lặp 
                        +lặp mảng / object

    1.vòng lặp while thực thi lệnh được thực thi trước trong khi BTDK=true.
    while trong thân vòng lặp phải có 1 biến thay đổi để BTDK = false.
     -->
  <!-- VD:tính tổng các số nhỏ hơn 10. -->
    <?php
   
    $n=10;
    $sum=0;
    $i=1;
    while($i<$n){
        $sum+=$i;
        $i++;
    }
    echo "Tổng các số nhỏ hơn $n = $sum";
    ?>

    vòng lặp for (biến khởi tạo ; điều kiện ;stop)
    <?php
    // for($i=1;$i<$n;$i++){
    //     $sum+=$i;
    //     echo "sô $i <br>";
    // }
    ?>

    <?php
    $ii=1;
    $max=20;
    $tong=0;
    for($ii=1;$ii<=$max;$ii++){
        $tong+=$i++;
        echo "so $ii";
    }
    echo "<br>";

    for($ii=20;$ii>=1;$ii--){
        echo " $ii";
    }
    echo "<br>";

    for($ii=1;$ii<20;$ii++){
        if($ii%2==0){
            echo "$ii <br>";
        }
    }

    for($ii=1;$ii<20;$ii++){
        if($ii%2!=0){
            echo "$ii <br>";
        }
    }

    for($ii=1;$ii<20;$ii++){
        if($ii%3==0 && $ii%5==0){
            echo "$ii <br>";
        }
    }

  





    ?>

    


    

</body>
</html>