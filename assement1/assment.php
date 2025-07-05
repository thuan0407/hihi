<?php
session_start();
if(isset($_SESSION['user'])){
    echo "chào bạn : ".$_SESSION['user'];
}
if (isset($_POST['dangxuat'])) {//xóa session
    session_destroy();

    header("Location: login.php");
    exit();
}

$thongtin = [
    ["hoten" => "Hoàng Như Thuần", "masinhvien" => "PH58517", "ngaysinh" => "04/07/2002", "sdt" => "0236987456", "email" => "thuan@gmail.com", "gioitinh" => "Nam", "anh" => "12.jpg", "them" => "Đang học"],
    ["hoten" => "Nguyễn Văn tùng", "masinhvien" => "PH58518", "ngaysinh" => "03/05/2000", "sdt" => "0123698562", "email" => "tung@gmail.com", "gioitinh" => "Nữ", "anh" => "anh11.jpg", "them" => "Đang học"],
    ["hoten" => "Nguyễn Quang Thái", "masinhvien" => "PH58519", "ngaysinh" => "13/02/2003", "sdt" => "0212369856", "email" => "thai@gmail.com", "gioitinh" => "Nam", "anh" => "anh1.jpg", "them" => "Đang học"],
    ["hoten" => "Nguyễn Minh Tiến", "masinhvien" => "PH58520", "ngaysinh" => "05/08/1999", "sdt" => "0231236985", "email" => "tien@gmail.com", "gioitinh" => "Nam", "anh" => "anh2.jpg", "them" => "Đang học"],
    ["hoten" => "Lưu Diệp Phi", "masinhvien" => "PH58521", "ngaysinh" => "14/07/2001", "sdt" => "0326987569", "email" => "phhi@gmail.com", "gioitinh" => "Nữ", "anh" => "anh1.jpg", "them" => "Đang học"]
];


function tim($masv,$thongtin){//tìm kiếm tuyệt đối bằng id và tìm kiếm tương đối bằng tên và gmail
    $found = false;
    foreach($thongtin as $tt){
        $masv_thuong= strtolower($masv);
        if($masv == $tt["masinhvien"] || stripos($tt["hoten"],$masv_thuong) !==false || stripos($tt["gioitinh"],$masv_thuong) !==false){
            $found = true;
            ?>
        <table>
            <tr>
            <th><input type="checkbox" value=""> Họ tên </th>
            <th>Mã sinh viên</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Ảnh</th>
            <th>Trạng thái</th>

            </tr>
            <tr>
            <td><input type="checkbox" value=""><?=$tt["hoten"]?></td>
                <td><?=$tt["masinhvien"]?></td>
                <td><?=$tt["ngaysinh"]?></td>
                <td><?=$tt["sdt"]?></td>
                <td><?=$tt["email"]?></td>
                <td><?=$tt["gioitinh"]?></td>
                <td><img src="img/<?=$tt["anh"]?>" alt=""></td>
                <td><?=$tt["them"]?></td>
            </tr>
        </table>
        <?php      
        }
    }
    if(!$found){
        echo "Không tìm thấy";
        
    }
}

// tính tuổi 
function tinhtuoi($tt){
    $today = New DateTime();
    $ngaysinh = DateTime::createFromFormat('d/m/Y',$tt['ngaysinh']);
    if(!$ngaysinh){
        echo "sai định dạng ngày sinh";
    } 
    $tuoi = $today -> diff($ngaysinh)->y;
    return $tuoi;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ass.css">
</head>
<body>
    <form action="" method="post">
    <button type="submit" name="dangxuat">Đăng xuất</button>
    </form><br>
    
    <h1>Quản lý thông tin sinh viên</h1>

    <form action=""method="post">
        <input type="text" placeholder="Nhập mã sinh viên" name="ma">
        <button type="submit" name="tim" value="Tìm">Tìm</button>
    </form>
    <?php
    if(isset($_POST['tim'])){//kiểm tra xem mã có tồn tại hay không
        $masv=$_POST['ma'];
        if(!empty($masv)){
            tim($masv, $thongtin);
        }
        else{
            echo "bạn chưa nhập thông tin tìm kiếm";
        }   
    }
    ?>

    <table>
        <tr>
            <th><input type="checkbox" value=""> Họ tên </th>
            <th>Mã sinh viên</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Ảnh</th>
            <th>Trạng thái</th>
            <th>Tuổi</th>

        </tr>
        <?php
        foreach($thongtin as $tt){//trả về giữ liệu tìm kiếm
            ?>
            <tr>
                <td><input type="checkbox" value=""><?=$tt["hoten"]?></td>
                <td><?=$tt["masinhvien"]?></td>
                <td><?=$tt["ngaysinh"]?></td>
                <td><?=$tt["sdt"]?></td>
                <td><?=$tt["email"]?></td>
                <td><?=$tt["gioitinh"]?></td>
                <td><img src="img/<?=$tt["anh"]?>" alt=""></td>
                <td><?=$tt["them"]?></td>
                <td><?=$tong = tinhtuoi($tt)?></td>
            </tr>
          <?php
        }
        ?>

    </table>
</body>
</html>