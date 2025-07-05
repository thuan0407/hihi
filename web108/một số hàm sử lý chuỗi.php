<?php

//một số hàm quan trọng
$name ="hoang nhu thuan";
echo "<br>số lượng ký tự chuỗi $name:".strlen($name);
echo "<br> trích lọc chuỗi ".substr($name,3,3);

echo "<br> chuyển sang chữ thường $name ".strtolower($name);
echo "<br> chuyển sang chữ hoa $name".strtoupper($name);

$listname= "mai,linh,hoa,hoang";
echo "<br> vị trí của linh trong listname:".strpos($listname,"linh");
echo "<br> vị trí của hoang trong listnaem: ".strpos($listname,"hoang");
echo "<br> so sach chuỗi: ".strcmp($listname,$name);    
echo "<br> chuyển một chuỗi thành mảng: ";
$arrname=explode(",",$listname);
echo "<pre> ";
print_r($arrname);   


//bài tập
// Bài 1: Tạo 1 file strBai1.php để xử lý các nhiệm vụ sau:
// • Viết một hàm nhận vào một chuỗi và một ký tự phân tách, sau
// đó:
// • Chuyển chuỗi thành mảng dựa trên ký tự phân tách.
// • Trích xuất phần tử thứ hai của mảng (nếu có).
// • Trả về phần tử đã trích xuất hoặc thông báo "Không có phần tử
// thứ hai" nếu không tồn tại.

function ham1($str,$delimiter){
    $arr = explode($delimiter, $str);
    return isset($arr[1]) ? $arr[1]:"không có phần tử thứ hai";

}
//test
echo ham1("hello,word,php",",");//output:word
echo ham1("hello",",");// output: không có phần tử thứ hai


// Bài 2. Tạo 1 file strBai2.php để xử lý các nhiệm vụ sau:
// • Viết một chương trình PHP để kiểm tra tính hợp lệ của địa chỉ
// email nhập vào từ người dùng.
// • Nếu địa chỉ email hợp lệ, hãy phân tích và hiển thị phần
// username và domain (phần sau dấu @).
// • Nếu địa chỉ email không hợp lệ, thông báo cho người dùng biết.

//filter_var hỗ trợ kiểm tra 1 email có đúng định dạng
$email ="thuan@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<p> Email '$email' is valid .</p>";

    //chhia eamil thành tên người dùng và tên miền
    $parts = explode('@',$email);
    $username = $parts[0];
    $domain = $parts[1];

    echo "<p> user name:$username</p>";
    echo "<p> domain: $domain</p>";
}
else{
    echo "<p> email '$email' is not valid .</p>";
}

// Bài 3. Tạo 1 file strBai3.php để xử lý các nhiệm vụ sau:
// • Viết một chương trình PHP để đảo ngược một chuỗi nhập vào từ
// người dùng.
// • Hiển thị chuỗi ban đầu và chuỗi đã đảo ngược lên màn hình.

$input="hom nay ,troi nang dep";
$reversedtring = strrev($input);

//hôm nay ,trờu nắng đẹp
echo "<p> original string : $input</p>";

//ped gnan , yan moh
echo "<p> reversed string: $reversedtring</p>";

?>