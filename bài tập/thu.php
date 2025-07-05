<?php
$people=[
    ["id"=>"1001","ten"=>"hoang thuan","diachi"=>"ha noi","email"=>"thuan@gmail.com","namct"=>"10"],
    ["id"=>"1001","ten"=>"hoang thuan","diachi"=>"ha noi","email"=>"thuan@gmail.com","namct"=>"37"],
    ["id"=>"1001","ten"=>"quang thai","diachi"=>"ha noi","email"=>"thuan@gmail.com","namct"=>"39"],
    ["id"=>"1001","ten"=>"hoang thuan","diachi"=>"ha noi","email"=>"thuan@gmail.com","namct"=>"8"],
    ["id"=>"1001","ten"=>"hoang thuan","diachi"=>"ha noi","email"=>"thuan@gmail.com","namct"=>"4"]
];


// 3. Tìm thông tin ra nhân viên có năm công tác cao nhất, nhỏ nhât (Yêu
// cầu xây dựng 2 hàm có giá trị trả về Min, Max) (3đ)

function tim_min($people){
    if(empty($people)){
        return null;
    }
    $min =(int) $people[0]["namct"];
    $tennv_min=$people[0]["ten"];
    foreach($people as $tt){
        if($min >(int) $tt["namct"]){
            $min=(int)$tt["namct"];
            $tennv_min=$tt["ten"];
        }

    }
    return [$min, $tennv_min];
}

function tim_max($people){
    $max =(int) $people[0]["namct"];
    $ten_max =$people[0]["ten"];
    foreach($people as $tt){
        if($max < $tt["namct"]){
            $max = $tt["namct"];
            $ten_max =$tt["ten"];
        }
    }
    return [$max,$ten_max];
}

//bài 4 tính tiền thưởng
function thuong($namct){
    if($namct>=10){
        return 15;
    }
    else if($namct>=5){
        return 8;
    }
    else if($namct>=2){
        return 2;
    }
}

//bài 2
if (isset($_POST["tim"])){
    $ten = $_POST["ten"];
   
}
function tim($ten ,$people){
    foreach ($people as $tt){
        if ($ten == $tt["ten"]){?>
        <table>
            <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Năm công tác</th>
            <th>Thưởng tết</th>
            </tr>
            <tr>
                <td><?=$tt["id"]?></td>
                <td><?=$tt["ten"]?></td>
                <td><?=$tt["namct"]?></td>
                <td><?=$tt["email"]?></td>
                <td><?=$tt["diachi"]?></td>

            </tr>
        </table>
        <?php
         break; // Dừng vòng lặp ngay khi tìm thấy
          
        }
    }
echo "không tìm thấy tên giống như vậy";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border:1px solid black;
            border-collapse:collapse;
        }
        td , th{
            border-bottom:1px solid black;
            border-left:1px solid black;
            
        }
        table{
            margin:50px 0;

        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" value="" name="ten">
        <button type="submit"value="tim" name="tim" >Tìm</button>
    </form>
    <?php
      tim($ten ,$people);
    ?>
    <table >
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Năm công tác</th>
            <th>Thưởng tết</th>
        </tr>
        <?php
        foreach($people as $tt){?>
        <tr>
            <td><?=$tt["id"]?></td>
            <td><?=$tt["ten"]?></td>
            <td><?=$tt["diachi"]?></td>
            <td><?=$tt["email"]?></td>
            <td><?=$tt["namct"]?></td>
            <td><?= thuong($tt["namct"]) ?> triệu</td>
        </tr>
    <?php
        }
        ?>
    </table>
    <h4>nhân viên có năm công tác ít nhất là:</h4>
    <?php
    // echo tim_min($people);
    list($min_namct, $tennv_min) = tim_min($people);
echo "Tên: $tennv_min, Năm công tác: $min_namct";
    ?>
    <h4>nhân viên có năm công tác cao nhất là:</h4>
    <?php
    list($max , $ten_max)=tim_max($people);
    echo "tên : $ten_max , năm công tác là: $max";
    ?>
</body>
</html>
