<?php
function totitlecase($tr){
    return ucwords(strtolower($tr));
    
}
$string="hello world";
echo "titile case : ".totitlecase($string);
?>
<br>



<?php
function findmax($arr){
    $max = $arr[0];
    foreach($arr as $value){
        if($value > $max){
            $max = $value;
        }
    }
    return $max;
}
$arr=[5,6,9,2,8];
echo "số lơn nhất = ".findmax($arr);
?>