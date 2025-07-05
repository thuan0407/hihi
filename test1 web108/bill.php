<?php
session_start();
if(isset($_SESSION['user'])){
    echo "xin chào bạn: ".$_SESSION['user'];
}
if (isset($_SESSION['dx'])){
    session_destroy();
    header("Location: dh.php");
    exit();
}
$electricity_bills=[
    ["id"=>1,"Ten"=>"hoàng như thuần","sd"=>120,"thang"=>"02/2025","dongia"=>300],
    ["id"=>2,"Ten"=>"nguyễn quang thái","sd"=>220,"thang"=>"07/2025","dongia"=>300],
    ["id"=>3,"Ten"=>"vũ minh tiến","sd"=>125,"thang"=>"02/2025","dongia"=>300],
    ["id"=>4,"Ten"=>"nguyễn văn tùng","sd"=>300,"thang"=>"05/2025","dongia"=>300],
    ["id"=>5,"Ten"=>"bùi xuân huấn","sd"=>270,"thang"=>"12/2025","dongia"=>300],
];
//tìm kiếm tương đối theo tên hoặc tháng
function tim($keyword,$electricity_bills){
    $check=false;
    foreach($electricity_bills as $tt){
        $thang = explode("/",$tt['thang']);
        if(stripos($tt['Ten'],$keyword)!==false || stripos($thang[0],$keyword)!==false){
            $check =true;
            ?>
             <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên khách hàng</th>
            <th>Số điện tiêu thụ</th>
            <th>Tháng</th>
            <th>Đơn giá</th>
            <th>Tiền cơ bản</th>
            <th>Tổng tiền</th>
        </tr>
        <tr>
                <td><?=$tt['id']?></td>
                <td><?=$tt['Ten']?></td>
                <td><?=$tt['sd']?></td>
                <td><?=$tt['thang']?></td>
                <td><?=$tt['dongia']?></td>
                <td><?=tiencoban($tt['dongia'],$tt['sd'])?></td>
                <td><?=tong($tt['dongia'],$tt['sd'])?></td>
            </tr>
    </table>

            <?php
        }

    }
    if($check == false){
        echo "Không tìm thấy!";
    }
}
// tiền cơ bản
function tiencoban($dg,$sd){
    return $tencoban=$dg * $sd;
}
//tổng tiền
function tong($dg,$sd){
    $tong;
    if($sd>=300){
        return $tong=$dg * $sd *1.2;
    }
    else if($sd>=100){
        return $tong=$dg * $sd *1.1;
    }
    else if($sd<100){
        return $tong=$dg * $sd *0.95;
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin:10px 0;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="keyword">
        <button name="tim" type="submit">Tìm</button>
    </form>
    <?php
    if(isset($_POST['tim'])){
        $keyword =$_POST['keyword'];
        if(!empty($keyword)){
            tim($keyword,$electricity_bills);
        }
        else{
            echo "Bạn chưa nhập từ khóa!";
        }
    }
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên khách hàng</th>
            <th>Số điện tiêu thụ</th>
            <th>Tháng</th>
            <th>Đơn giá</th>
            <th>Tiền cơ bản</th>
            <th>Tổng tiền</th>
        </tr>
        <?php
        foreach($electricity_bills as $tt){
            ?>
            <tr>
                <td><?=$tt['id']?></td>
                <td><?=$tt['Ten']?></td>
                <td><?=$tt['sd']?></td>
                <td><?=$tt['thang']?></td>
                <td><?=$tt['dongia']?></td>
                <td><?=tiencoban($tt['dongia'],$tt['sd'])?></td>
                <td><?=tong($tt['dongia'],$tt['sd'])?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>