<?php
$people=[
    ["id"=>"1001","ten"=>"hoàng như thuần","diachi"=>"hà nội","email"=>"thuan@gmail.com","namct"=>5],
    ["id"=>"1002","ten"=>"nguyễn văn hoàng","diachi"=>"hà nội","email"=>"hoang@gmail.com","namct"=>3],
    ["id"=>"1003","ten"=>"nguyễn thành công","diachi"=>"hà nam","email"=>"cong@gmail.com","namct"=>7],
    ["id"=>"1004","ten"=>"trần công minh","diachi"=>"tuyên quang","email"=>"minh@gmail.com","namct"=>4],
    ["id"=>"1005","ten"=>"nguyễn thị hòa","diachi"=>"yên bái","email"=>"hoa@gmail.com","namct"=>3],
];
function tim($tukhoa,$people){
    $check=false;
    foreach($people as $tt){
        if($tukhoa == $tt['id'] || stripos($tt['ten'],$tukhoa) !== false){
            $check=true;
            ?>
            <table>
            <tr>
            <th>id</th>
            <th>tên</th>
            <th>địa chỉ</th>
            <th>email</th>
            <th>năm công tác</th>
            </tr>
            <tr>
            <td><?=$tt['id']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['diachi']?></td>
            <td><?=$tt['email']?></td>
            <td><?=$tt['namct']?></td>
        </tr>
        </table>
        <?php
        }
        

    }
    if(!$check){
        echo "không có sinh viên này";
    }
}
function tim_min($people){
    $gtmin=(int)$people[0]['namct'];
    $tenmin=$people[0]['ten'];
    foreach($people as $tt){
        if($gtmin>(int)$tt['namct']){
            $gtmin=$tt['namct'];
            $tenmin=$tt['ten'];
        }


    }
    return[$gtmin,$tenmin];
  
   
}
tim_min($people);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
            background-color: rgb(85, 208, 239);
            width: 500px;
            margin:10px 0;
        }
        tr,th,td{
            border:1px solid black;

        }
        form{
            margin:10px 0;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="tukhoa" placeholder="nhập tên ">
        <button type="submit" name="tim">tìm</button>
        <?php
        if(isset($_POST['tim'])){
            $tukhoa=$_POST['tukhoa'];
            if(!empty($tukhoa)){
                tim($tukhoa,$people);
            }
            else{
                echo "bạn chưa nhập từ khóa";
            }
           
        }
      
        ?>
    </form>
    <table >
        <tr>
            <th>id</th>
            <th>tên</th>
            <th>địa chỉ</th>
            <th>email</th>
            <th>năm công tác</th>
        </tr>
        <?php
        foreach($people as $tt){?>
        <tr>
            <td><?=$tt['id']?></td>
            <td><?=$tt['ten']?></td>
            <td><?=$tt['diachi']?></td>
            <td><?=$tt['email']?></td>
            <td><?=$tt['namct']?></td>
        </tr>
        <?php

        }
        ?>
    </table>
    <?php
    list($gtmin,$tenmin)=tim_min($people);
    echo "người có năm công tác ngắn nhất là: ".$tenmin." có ".$gtmin." công tác";
    ?>
</body>
</html>