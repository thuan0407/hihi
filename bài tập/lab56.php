<?php
session_start();
// if(isset($_SESSION['user'])){
//     echo "chào bạn : ".$_SESSION['user'];
// }
$student=[
    ["id"=>"1001","ten"=>"hoàng như thuần","diachi"=>"hà nội","email"=>"thuan@gmailcom","hocbong"=>2000000],
    ["id"=>"1002","ten"=>"nguyễn quang thái","diachi"=>"nam định","email"=>"thain@gmailcom","hocbong"=>5000000],
    ["id"=>"1003","ten"=>"nguyễn văn tùng","diachi"=>"hà nội","email"=>"tung@gmailcom","hocbong"=>2000000],
    ["id"=>"1004","ten"=>"vũ mạnh tiến","diachi"=>"hà nội","email"=>"tien@gmailcom","hocbong"=>1000000],
    ["id"=>"1005","ten"=>"lưu bá ôn","diachi"=>"hà nội","email"=>"on@gmailcom","hocbong"=>2000000],
];
function tim($tukhoa,$student){
    $check=false;
    foreach($student as $tt){
        $check=true;
        if(stripos($tt['ten'],$tukhoa)!== false){?>
        <table border="1">
            <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Học bổng</th>  
            </tr>
            <tr>
            <td><?=$tt['id']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['diachi']?></td>
            <td><?=$tt['email']?></td>
            <td><?=$tt['hocbong']?></td>
            </tr>
            
        </table>
        <?php
        }
    }
    if(!$check){
        echo "không có sinh viên nào có tên như vậy1";
    }

}

function hocphi($tt){
    $hocphi=7200000;
    if($tt['hocbong']==5000000){
        $hocphi*=0.95;
    }
    elseif($tt['hocbong']==2000000){
        $hocphi*=0.98;
    }
    else{
        $hocphi;
    }
    return $hocphi;
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
            margin:20px 0;
        }
    </style>
</head>
<body>
<h3>Thông tin sinh viên</h3>
    <form action="" method="post">
        <input type="text" name="tukhoa">
        <button type="submit" name="tim">Tìm</button>
    </form>
    <?php
    if(isset($_POST['tim'])){
        $tukhoa=$_POST['tukhoa'];
        if(!empty($tukhoa)){
            tim($tukhoa,$student);
        }
        else{
            echo "bạn chưa nhập từ khóa";
        }
    }
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Học bổng</th>
            <td>Học phí</td>

        </tr>

        <?php
        foreach($student as $tt){?>
        <tr>
            <td><?=$tt['id']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['diachi']?></td>
            <td><?=$tt['email']?></td>
            <td><?=$tt['hocbong']?></td>
            <td><?=hocphi($tt)?></td>
        </tr>
     <?php   
    }
        ?>
    </table>
</body>
</html>