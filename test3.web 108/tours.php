<?php
session_start();
if(isset($_SESSION['user'])){
    echo "chào bạn ".$_SESSION['user'];
}
if(isset($_POST['dx'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
$tours=[
    ["id"=>1001,"ten"=>"du lịch hạ long","thongtin"=>"cùng ngắm nhìn các dãy núi trên bển tuyệt đẹp","songaydi"=>3,"gia"=>3000000],
    ["id"=>1002,"ten"=>"du lịch hà nội","thongtin"=>"Hãy trả nghiệm các món ăn ngon của hà thành những con phố cổ xầm uất","songaydi"=>2,"gia"=>7000000],
    ["id"=>1003,"ten"=>"du lịch nha trang","thongtin"=>"Thư giãn cảm nhận từng làn gió mát lành của biển cả những món ăn hải sản thơm ngon","songaydi"=>7,"gia"=>5000000],
    ["id"=>1004,"ten"=>"du lịch tây bắc","thongtin"=>"Ngắm nhìn các dãy núi hùng vĩ rộng bậc thang tuyệt đẹp làm ta cảm thấy cứ như là lạc vào trốn mộng mơ","songaydi"=>5,"gia"=>4000000],
    ["id"=>1005,"ten"=>"du lịch hà nam","thongtin"=>"Tham quan các điểm du lịch nổi tiếng như tam trúc và thưởng thức các món đặc sản nơi đây","songaydi"=>8,"gia"=>5000000],
];
//tìm kiếm theo tên tours và thông tin 
function tim($tukhoa,$tours){
    $check=false;
    foreach($tours as $tt){
        if(stripos($tt['ten'],$tukhoa) !== false ||stripos($tt['thongtin'],$tukhoa) !== false){
            $check = true;
            ?>
            <table border=1>
            <tr>
            <td><?=$tt['id']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['thongtin']?></td>
            <td><?=$tt['songaydi']?></td>
            <td><?=number_format($tt['gia'],0,'','.')?></td>
            <td><?=giamgia($tt['songaydi'])?></td>
            <td><?=number_format(tonggia($tt['songaydi'],$tt['gia']),0,'','.')?></td>
        </tr>
        </table>
            <?php
        }
    }
     if($check==false){
        echo "không tìm thấy";
     }
}
function giamgia($songaydi){
    $giam;
    if($songaydi >=7){
        return $giam="15%";
    }
    else if($songaydi >=3){
        return $giam="10%";a
    }
    else if($songaydi <3){
        return $giam="5%";
    }
}
//tổng giá khi đã giảm
function tonggia($songaydi, $gia){
    $tong=0;
    if($songaydi >=7){
      return $tong = $gia*0.85;
    }
    else if($songaydi >= 3){
        return $tong = $gia*0.9;
    }
    else if($songaydi < 3){
        return $tong = $gia*0.95;
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
    <h2>tours du lịch</h2>
    <form action="" method="post">
        <input type="text" name="tukhoa">
        <button name="tim" type="submit">Tìm</button>
    </form>
    <?php
    if(isset($_POST['tim'])){
        $tukhoa = $_POST['tukhoa'];
        if(!empty($tukhoa)){
            tim($tukhoa,$tours);
        }
        else{
            echo "bạn chưa nhập từ khóa!";
        }
    }
    ?>
    <table border="1">
        <tr>
        <th>ID</th>
        <th>Tên tours</th>
        <th>Thông tin</th>
        <th>Số ngày đi</th>
        <th>Giá</th>
        <th>Giảm giá</th>
        <th>Tổng giá</th>
        </tr>
        <?php
        foreach($tours as $tt){?>
        <tr>
            <td><?=$tt['id']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['thongtin']?></td>
            <td><?=$tt['songaydi']?></td>
            <td><?=number_format($tt['gia'],0,'','.')?></td>
            <td><?=giamgia($tt['songaydi'])?></td>
            <td><?=number_format(tonggia($tt['songaydi'],$tt['gia']),0,'','.')?></td>
        </tr>
        <?php
    }
        ?>
    </table>
    <form action="" method="post">
        <button type="submit" name="dx">đăng xuất</button>
    </form>
</body>
</html>