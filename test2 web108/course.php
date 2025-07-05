<?php
session_start();
if(isset($_SESSION['user'])){
    echo "Xin chào bạn: ".$_SESSION['user'];
}
$khoahoc=[
    ["id"=>1,"studentname"=>"hoàng như thuần","course_name"=>"php cơ bản","hocphi"=>3000000,"thoiluong"=>10],
    ["id"=>2,"studentname"=>"nguyễn văn tùng","course_name"=>"php cơ bản","hocphi"=>3000000,"thoiluong"=>10],
    ["id"=>3,"studentname"=>"vũ minh tiến","course_name"=>"c#","hocphi"=>2000000,"thoiluong"=>5],
    ["id"=>4,"studentname"=>"nguyễn quang thái","course_name"=>"c#","hocphi"=>3000000,"thoiluong"=>8],
    ["id"=>5,"studentname"=>"nguyễn văn huy","course_name"=>"jvascrip","hocphi"=>1000000,"thoiluong"=>4],
];
function tim($tukhoa,$khoahoc){
    $check=false;
    foreach($khoahoc as $tt){
        if(stripos($tt['studentname'],$tukhoa) !==false || stripos($tt['course_name'],$tukhoa) !==false){
            $check=true;
            ?>
            <table border="1">
            <tr>
                <th>ID</th>
                <th>Tên sinh viên</th>
                <th>Tên khóa học</th>
                <th>Học phí</th>
                <th>Thời lượng</th>
                <th>Chi phí mỗi tuần</th>
                <th>Tổng học phí thực tế</th>
            </tr>

            <tr>
                <td><?=$tt['id']?></td>
                <td><?=$tt['studentname']?></td>
                <td><?=$tt['course_name']?></td>
                <td><?=$tt['hocphi']?></td>
                <td><?=$tt['thoiluong']?></td>
                <td><?=number_format($cpmt= chiphimoituan($tt['thoiluong'],$tt['hocphi'],0,'','.'))?></td>
                <td><?=number_format(tong($tt['thoiluong'],$cpmt),0,'','.')?></td>
            </tr>

            </table>
            <?php
        }
    }
    if($check==false){
        echo "không tìm thấy";
    }

}
// câu c
function chiphimoituan($tuan,$hocphi){
    $chiphimoituan=$hocphi/$tuan;
    if($tuan >=10){
        return $chiphimoituan*=0.85;
    }
    else if($tuan>=5){
        return $chiphimoituan*=0.9;
    }
    else if($tuan<5){
        return $chiphimoituan*=1.05;
    }


}
//câu d
function tong($thoiluong,$cp){
    return $tong=$thoiluong *$cp;
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
<!-- Tìm kiếm tương đối theo tên học viên hoặc tên khóa học -->
 <form action="" method="post">
    <input type="text" name="tukhoa">
    <button name="tim" type="submit">Tìm</button>
 </form>
 <?php
 if(isset($_POST['tim'])){
    $tukhoa = $_POST['tukhoa'];
    if(!empty($tukhoa)){
        tim($tukhoa,$khoahoc);
    }
    else{
        echo "Bạn chưa nhập từ khóa tìm kiếm!";
    }
 }
 ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên sinh viên</th>
            <th>Tên khóa học</th>
            <th>Học phí</th>
            <th>Thời lượng</th>
            <th>Chi phí mỗi tuần</th>
            <th>Tổng học phí thực tế</th>
        </tr>
        <?php
        foreach($khoahoc as $tt){
            ?>
            <tr>
                <td><?=$tt['id']?></td>
                <td><?=$tt['studentname']?></td>
                <td><?=$tt['course_name']?></td>
                <td><?=number_format($tt['hocphi'],0,'','.')?></td>
                <td><?=$tt['thoiluong']?></td>
                <td><?=number_format($cpmt= chiphimoituan($tt['thoiluong'],$tt['hocphi'],0,'','.'))?></td>
                <td><?=number_format(tong($tt['thoiluong'],$cpmt),0,'','.')?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>