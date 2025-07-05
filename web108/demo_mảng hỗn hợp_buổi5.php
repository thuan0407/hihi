<?php
//mảng hỗn hợp
$array1=[
    "ph01"=>"hồng",
    "ph02"=>"ninh",
    "ph03"=>"mạnh"
];

$array2=["001"=>"hà","002"=>"ngọc","003"=>"ngân"];

echo "<pre>";
print_r($array1);


//truy xuất 1 phần tử
echo $array1["ph02"];

//duyệt all các phầ tử của mảng
echo "<br> duyệt qua all cả các phần tử của mảng 4: ";
foreach ($array1 as $id => $student)
    echo "$student";


//3.mảng hỗn hợp
//trường hợp 1.key khuyết mảng mix mảng index
$arr5 = [
    ["mai", "Wd01", 10],
    ["lan", "Wd02", 9],
    ["loan", "Wd03", 8],
    ["linh", "Wd04", 10],
    ["phong", "Wd05", 5]
];

echo "<pre>";
print_r($arr5);
echo "</pre>"; // Đóng thẻ đúng cách

echo "<br>Truy xuất một phần tử của mảng: ";
echo $arr5[0][1]; // In ra "Wd01"

echo "<br>Duyệt qua tất cả các phần tử của mảng:<br>";
foreach ($arr5 as $student) {
    echo $student[0] . "<br>"; // Thêm <br> để xuống dòng
}

//trường hợp 2 key khuyết mix mảng liên kết
$arr6=[
    ["ten"=>"mai","lop"=>10,"diem"=>10],
    ["ten"=>"cúc","lop"=>11,"diem"=>10],
    ["ten"=>"loan","lop"=>10,"diem"=>8],
    ["ten"=>"nga","lop"=>12,"diem"=>9]
];
echo "<pre>";
print_r($arr6);
echo "<br> truy xuất môt phần tử của mảng";
echo $arr6[1]["ten"];
echo "<br> duyệt qua alll các phầ tử của mảng";
foreach($arr6 as $key =>$student)
    echo $student["ten"]." ";



?>