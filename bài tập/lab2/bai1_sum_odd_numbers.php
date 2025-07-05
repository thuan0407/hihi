<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("LIMIT",50);
    $sum=0;

    //tính tổng các số lẻ
    for($i=1;$i<LIMIT;$i++){
        if($i%2==0){
            continue;
        }
        else{
            $sum+=$i;
        }
    }
    echo "Tổng các số lẻ từ 1 đến ".LIMIT." = ".$sum;

    ?>
</body>
</html>