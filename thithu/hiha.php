<?php
session_start();
if(isset($_SESSION['user'])){
    echo "xin chào : ".$_SESSION['user'];
}
if(isset($_POST['dx'])){
    session_destroy();
    header("Location: login.php");
    exit();

}

$pp=[
    ["ho"=>"hoàng","ten"=>"thuan"],
    ["ho"=>"nguyễn","ten"=>"hoang"],
    ["ho"=>"đoàn","ten"=>"du"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
        <th>họ </th>
        <th>tên</th>
        </tr>
        <?php
        foreach($pp as $tt){
            ?>
            <tr>
                <td><?=$tt['ho']?></td>
                <td><?=$tt['ten']?></td>
            </tr>

            <?php
        }
        ?>
    </table>

    <form action=""method="post">
        <input type="text" name="tukhoa">
        <button type="submit" name="tim">tim</button>
    </form>
<?php
if(isset($_POST['tim'])){
    $tukhoa =$_POST['tukhoa'];
    if(!empty($tukhoa)){
        tim($tukhoa,$pp);
    }
    else{
        echo "bạn chưa nhập thông tin tìm kiếm!";
    }
}   

function tim($tukhoa,$pp){
    $check =false;
    foreach($pp as $tt){
        if(stripos($tt['ten'],$tukhoa) !==false){
            $check =true;
            ?>

            <tr>
                <td><?=$tt['ho']?></td>
                <td><?=$tt['ten']?></td>
            </tr>
            </table>
            <?php
        }
    }
    if(!$check){
        echo "không tìm tháy";
    }

}
?>
<form action=""method="post">
    <button name="dx" type="submit">đăng xuất</button>
</form>
</body>
</html>