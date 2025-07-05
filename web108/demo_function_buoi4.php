<!-- hàm
*hàm không có giá trị trả về 
function ten hàm ([tham số]){
    //lệnhlệnh
}
-> gọi tên hàm truyền tham số

*hàm có giá trị trả về 
function tên hàm ([tham số]){
    //lệnh
    return giá trị trả về;
}
-> đặt biểu thức biến để nhận giá trị trả về 

// cách gọi hàm : tên hàm (tham số) -->

<?php
//1.hmaf không có giá trị trả về 
function tong2so($a,$b){
    $tong = $a + $b;
    echo "tổng 2 số $a + $b = $tong";

}
//gọi hàm
tong2so(20,5);
echo "<br>";

//2.hàm có giá trị trả về 
function sumcd ($c,$d=10){
    return $c+$d;
}
//gọi hàm
echo "tổng hai số là: ".sumcd(10,20);
echo "<br>";
echo "tông hai số là: ".sumcd(10);//hàm có giá trị mặc định thì chỉ cần nhập giá trị còn lại 


$x = 10;
function test(){
    global $x;
    echo " <br> giọi trong hàm: $x";
    echo "<br>";
}
test();
echo "gọi x ngoài hàm : $x"

bài tập 1 : 
bươc 1: xây dựng 1 hàm đăng kí: user , pass , họ tên , ngày sinh , số điện thoại , email trong đó các trường về 
user ,pass và sdt bắt buộc phải nhập liệu 

bước 2; xây dựng một form đăng kí khi ấn nút lưu sẽ hiển thị thông tin đăng nhập trên màn hình (sau này sẽ lưu vào database)
yêu cầu pass phải mã hóa (gợi ý sử dụng hàm mã hóa md5() hoặc sha1())
?>




