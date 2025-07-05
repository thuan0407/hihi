<?php
$arr=["linh ",'mai',"phong"];//khai báo chuỗi
echo "<pre>";
print_r($arr);

array_push($arr,"thai","thuan");//thêm các phần tử vào cuối mảng
echo "<pre>";
print_r($arr);

$last = array_pop($arr);//xóa một phần tử ở cuối
echo "<pre>";
print_r($last);

if(in_array("mai",$arr)){//hàm kiểm tra có dữ liệu đó bên trong không
    echo "<br> có tên bạn mai";
}
else{
    echo "<br> không có tên";
}

$key = array_keys($arr);//hiển thị các keys trong mảng
echo "<pre>";
print_r($key);

$giatri_arr=array_values($arr);//hiện thị giá trị (không quan tâm phần key là gì)
echo "<pre>";
print_r($giatri_arr);


unset($arr[4]);//xoa phần tử được chỉ định trong mảng nó sẻ xóa luôn của phần keys
echo "<pre>";
print_r($arr);

$chuoi="125,255,thuan";
$arry7=explode(",",$chuoi);//chuyển từ chuỗi sang mảng
echo "<pre>";
print_r($arry7);
if(is_array($arry7)){
    echo ("<pre> đây là mảng ");
}
else {
    echo ("<pre> đây không phải là mảng");
}

$chuoi=implode($arry7);//chuyển từ mảng sang chuỗi
echo "<pre>";
if(is_string($chuoi)){
    echo "<pre> đây là chuỗi";
}
else{
  
    echo " <br> đây không phải là chuỗi";
}
echo "<pre>";
print_r($chuoi);








    

?>