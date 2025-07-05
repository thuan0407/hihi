<?php
session_start();
if(isset($_POST['thoat'])){
    session_destroy();
    header("Location: login.php");
    exit();

}

$thongtin = [
    ["hoten" => "Hoàng Như Thuận", "masinhvien" => "PH58517", "ngaysinh" => "04/07/2002", "sdt" => "0236987456", "email" => "thuan@gmail.com", "gioitinh" => "Nam", "anh" => "12.jpg", "them" => "Đang học"],
    ["hoten" => "Nguyễn Văn Tùng", "masinhvien" => "PH58518", "ngaysinh" => "03/05/2000", "sdt" => "0123698562", "email" => "hoag@gmail.com", "gioitinh" => "Nữ", "anh" => "anh11.jpg", "them" => "Đang học"],
    ["hoten" => "Nguyễn Quang Thái", "masinhvien" => "PH58519", "ngaysinh" => "13/02/2003", "sdt" => "0212369856", "email" => "huan@gmail.com", "gioitinh" => "Nam", "anh" => "anh1.jpg", "them" => "Đang học"],
    ["hoten" => "Nguyễn Minh Tiến", "masinhvien" => "PH58520", "ngaysinh" => "05/08/1999", "sdt" => "0231236985", "email" => "tung@gmail.com", "gioitinh" => "Nam", "anh" => "anh2.jpg", "them" => "Đang học"],
    ["hoten" => "Lưu Diệp Phi", "masinhvien" => "PH58521", "ngaysinh" => "14/07/2001", "sdt" => "0326987569", "email" => "phhi@gmail.com", "gioitinh" => "Nữ", "anh" => "anh1.jpg", "them" => "Đang học"]
];
function tim($tukhoa,$thongtin){
    $ktra = false;
    foreach($thongtin as $tt){
        if($tukhoa == $tt["masinhvien"] || stripos($tt["hoten"],$tukhoa) !== false || stripos($tt["email"],$tukhoa) !== false){
            $ktra = true;
            ?>
            <table>
                <tr>
                     <th>họ tên:</th>
                     <th>mã sinh viên:</th>
                     <th>email:</th>
                </tr>
                <tr>
                     <th><?=$tt['hoten']?></th>
                     <th><?=$tt['masinhvien']?></th>
                     <th><?=$tt['email']?></th>
        </tr>


            </table>
            <?php
        }
        
        }
        if(!$ktra){
            echo "thất bại";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method=post>
    <input type="submit" value="thoat" name="thoat">
    </form><br>


    <form action="" method=post>
        <input type="text" name="tukhoa">
        <input type="submit" value="tim" name="tim">
    </form>
    <?php
    if(isset($_POST['tim'])){
        $tukhoa = $_POST['tukhoa'];
        if(!empty($tukhoa)){
            tim($tukhoa,$thongtin);
        }
        else{
            echo "kiểm tra lại";
        }
    }
    ?>
    <table>
        <tr>
            <th>họ tên:</th>
            <th>mã sinh viên:</th>
            <th>email:</th>
        </tr>
        <?php
        foreach($thongtin as $tt){?>
        <tr>
            <th><?=$tt['hoten']?></th>
            <th><?=$tt['masinhvien']?></th>
            <th><?=$tt['email']?></th>
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>