<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //toán tử số học
    $a=10;
    $b=3;
    echo "Addition:".($a+$b) . "<br>";
    echo "Subtraction:".($a-$b) . "<br>";
    echo "Multiplication:".($a*$b) . "<br>";
    echo "Division:".($a/$b) . "<br>";
    echo "Modulus:".($a%$b) . "<br>";
    
    //toán tử so sánh
    echo "Equal:". var_dump($a==$b)."<br>";
    echo "Not quanl:". var_dump($a!=$b)."<br>";
    echo "Greater than:". var_dump($a>$b)."<br>";
    echo "Less than:". var_dump($a<$b)."<br>";

    //toán tử logic
    $x=true;
    $y=false;

    echo "AND".var_dump($x && $y)."<br>";
    echo "OR".var_dump($x || $y)."<br>";
    echo "NOT".var_dump(!$x)."<br>";




    


    ?>
</body>
</html>