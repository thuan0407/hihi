<?php
// // khai báo mảng
// $arr1=array();
// $arr2= [];
// $arr3= ['mai','tu','hòa'];

// //khởi tạo giá trị
// $arr1[0]=10;
// $arr1[1]='hello';
// $arr1[2]='kết thúc';

// //truy cập đến 1 tử của mảng
// echo "$arr3[0]";

// //duyệt qua all các phần tử của mảng
// //cách 1 dùng for
// echo "<br> duyệt qua toàn bộ mảng 3";
// for($i=0; $i< count($arr3); $i++){
//     echo $arr3[$i].' ';
// }
  

// //cách 2:dùng foreach
// echo "<br> duyệt qua toàn bộ mảng 1";
// foreach ($arr1 as $key => $value)
// echo "$value ";




//có ba cách để truy xuất dữ liệu từ mảng liên kết và có ba cách để tọa mảng liên kết
// trương hợp 11
$mang1 = array(
    "ten" => "thuần",
    "namsinh"=> 2002,
    "que"=>"hà tây"
);
var_dump($mang1);
echo "<br>";
//trường hợp 22
$mang2=[
    "ten" => "thuần  ",
    "namsinh"=> 2002    ,
    "que"=>"hà tây  "

];
print_r($mang2);
//in môt phần tử của mang liên kết
echo $mang2["ten"];

echo "<br>";
//trường hợp 3
$mang3=[];
$mang3["ten"]="ngọc";
$mang3["tuoi"]=23;
$mang3["que_quan"]="hưng yên";
foreach ($mang3 as $key => $value) {
    echo "$key: $value <br>";
}
echo "<br>";

foreach ($mang3 as $haha => $value){
    echo "$haha: $value";
    echo "<br>";
}


//mảng đa chiều là chứa một hoăcj nhiều mảng con
$students = [
    "Tung" => ["age" => 21, "city" => "Hanoi"],
    "Lan" => ["age" => 22, "city" => "Haiphong"]
];

// Truy xuất dữ liệu
echo $students["Tung"]["city"]; // Kết quả: Hanoi


?>