<?php
session_start();
if(isset($_SESSION['user'])){
    echo "chào session : ".$_SESSION['user'];
}
if(isset($_POST['dangxuat'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
echo"<br>";
$people=[
    ["ma"=>"1001","ten"=>"Minh","thuong"=>"200"],
    ["ma"=>"1001","ten"=>"thuần","thuong"=>"300"],
    ["ma"=>"1001","ten"=>"Nga","thuong"=>"100"],
];

//câu 2
function hocphi($tt){
    $hocphi=7200000;
    if($tt['thuong']==200){
        $hocphi*=0.95;
    
    }
    else{
        $hocphi=$hocphi;
    }
    return $hocphi;
    
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="v.css">
</head>
<body>
    <br>
    <form action="" method="post">
    <button sype="submit" name="dangxuat">Đăng xuất</button><br>
    </form>
    <!-- câu 3 -->
     <form action="" method="post">
        <input type="text" name="tukhoa">
        <button type="submit" name="tim">Tìm</button>
     </form>
     <?php
     //câu 3
if(isset($_POST['tim'])){
    $tukhoa = $_POST['tukhoa'];
    if(!empty($tukhoa)){
        tim($tukhoa,$people);
    }
    else{
        echo "bạn chưa nhập nộii dung tìm kiếm !";
    }
}

function tim($tukhoa,$people){
    $check=false;
    $tukhoa1 = strtolower($tukhoa);

    foreach($people as $tk){
        if($tukhoa == $tk['ma'] || stripos(strtolower($tk['ten']),$tukhoa1) !==false){
            $check=true;
            ?>
        <table>
            <tr>
            <th>mã sinh viên</th>
            <th>tên sinh viên</th>
            <th>học bổng</th>
            <th>học phí</th>
            </tr>

            <tr>
            <td><?=$tk['ma']?></td>
            <td><?=$tk['ten']?></td>
            <td><?=$tk['thuong']?></td>
            <td><?=hocphi($tk)?></td>
            </tr>
        </table>
        <?php
            
        }

    }
    if($check ==false){
        echo "không tìm thấy";
    }
}
     ?>
     <br>
    <!-- câu 1 -->
     <table>
        <tr>
            <th>mã sinh viên</th>
            <th>tên sinh viên</th>
            <th>học bổng</th>
            <th>học phí</th>
        </tr>
        <?php
        foreach($people as $tt){?>
        <tr>
            <td><?=$tt['ma']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['thuong']?></td>
            <td><?=hocphi($tt)?></td>
        </tr>
        <?php
            
        }
        ?>
     </table>
</body>
</html>