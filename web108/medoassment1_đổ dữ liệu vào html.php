<?php
    $student=[
        ["stt"=>"1","ten"=>"mai","lop"=>"wd001","diem"=>10,"ma"=>"ph00012","anh"=>"anh2.jpg"],
        ["stt"=>"2","ten"=>"tuyet","lop"=>"wd002","diem"=>10,"ma"=>"ph00013","anh"=>"anh1.jpg"],
        ["stt"=>"3","ten"=>"mai","lop"=>"wd003","diem"=>10,"ma"=>"ph00014","anh"=>"anh2.jpg"],
        ["stt"=>"4","ten"=>"mai","lop"=>"wd004","diem"=>8,"ma"=>"ph00016","anh"=>"anh1.jpg"],
        ["stt"=>"5","ten"=>"mai","lop"=>"wd001","diem"=>10,"ma"=>"ph007812","anh"=>"anh1.jpg"],
        ["stt"=>"6","ten"=>"mai","lop"=>"wd002","diem"=>9,"ma"=>"ph00015","anh"=>"anh2.jpg"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 80px;
           
        }
        {
            color:blue;
        }
    </style>
</head>
<body>
    <h1>danh sách sinh viên</h1>
    <table style="border:1px solid yellow;"  >
    
        <tr>
            <td>ảnh</td>
            <td>STT</td>
            <td>Mã sinh viên</td>
            <td>Họ tên</td>
            <td>lớp</td>
            <td>điểm</td>
           
        </tr>
   
    <?php
    foreach($student as $key =>$st){
        ?>
         <tr>
            <td><img src="img/<?=$st["anh"]?>" alt=""></td>
            <td><?= $st["stt"]?></td> 
            <td><?= $st["ma"]?></td>
            <td><?= $st["ten"]?></td>
            <td><?= $st["lop"]?></td>
            <td><?= $st["diem"]?></td>
        </tr>
    <?php
    }
    ?>
     </table>
</body>
</html>