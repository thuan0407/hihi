<?php

 $user=[
    ["nd1"=>"Philipie gurney","nd2"=>"web déign-shoppin","nd3"=>"02-13-2024","nd4"=>"$0.00","anh"=>["anh1.jpg","anh2.jpg"],"nd6"=>"graphic design","nd7"=>"converted","nd8"=>["thung_rac.jpg","thu.jpg","anh_2.jpg","mui_ten.jpg","ba_cham.jpg"]],
    ["nd1"=>"Philipie gurney","nd2"=>"web déign-shoppin","nd3"=>"02-13-2024","nd4"=>"$0.00","anh"=>"anh1.jpg","nd6"=>"graphic design","nd7"=>"converted","nd8"=>["thung_rac.jpg","thu.jpg","anh_2.jpg","mui_ten.jpg","ba_cham.jpg"]],
    ["nd1"=>"Philipie gurney","nd2"=>"web déign-shoppin","nd3"=>"02-13-2024","nd4"=>"$0.00","anh"=>"anh1.jpg","nd6"=>"graphic design","nd7"=>"converted","nd8"=>["thung_rac.jpg","thu.jpg","anh_2.jpg","mui_ten.jpg","ba_cham.jpg"]],
    ["nd1"=>"Philipie gurney","nd2"=>"web déign-shoppin","nd3"=>"02-13-2024","nd4"=>"$0.00","anh"=>"anh1.jpg","nd6"=>"graphic design","nd7"=>"converted","nd8"=>["thung_rac.jpg","thu.jpg","anh_2.jpg","mui_ten.jpg","ba_cham.jpg"]],
    ["nd1"=>"Philipie gurney","nd2"=>"web déign-shoppin","nd3"=>"02-13-2024","nd4"=>"$0.00","anh"=>"anh1.jpg ","nd6"=>"graphic design","nd7"=>"converted","nd8"=>["thung_rac.jpg","thu.jpg","anh_2.jpg","mui_ten.jpg","ba_cham.jpg"]],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assement.css">
</head>
<body>
    <h1>Danh sách</h1>
    <div class="var">
        <h2>Leads</h2>
        <div class="phai">
            <input type="text"value="search">
            <img src="img/1.png" alt="">
            <img src="img/2.png" alt="">
            <img src="img/3.png" alt="">
            <img src="img/5.png" alt="">
            <img src="img/6.png" alt="">
            <img src="img/4.png" alt="">
            <img src="img/dau-cong.png" alt="minh poping">
        </div>
        </div>

    <p>lapp > LEADS</p>
    <div class="caidat">
        <img src="img/10.png" alt="Cài đặt">

    </div>
    <table>
        <tr >
            <td class="mauxanh"> <input type="checkbox" name="radio" class="checkbox"> Contact:</td>
            <td class="mauxanh">title</td>
            <td class="mauxanh">Created</td>
            <td class="mauxanh">Value</td>
            <td class="mauxanh">Assigned</td>
            <td class="mauxanh">Catgory</td>
            <td class="mauxanh">Status</td>
            <td class="mauxanh">Action</td>
           
        </tr>
        <?php
        foreach($user as $key =>$tt){
        ?>
        <tr>
            <td class="mauxanh"><input type="checkbox" name="radio" class="checkbox"><?=$tt["nd1"]?></td>
            <td class="mauxanh"><?=$tt["nd2"]?></td>
            <td><?=$tt["nd3"]?></td>
            <td><?=$tt["nd4"]?></td>
            <td>
                <?php 
                     if (is_array($tt["anh"])) { // Nếu là mảng thì lặp qua từng ảnh
                        foreach ($tt["anh"] as $img) { ?>
                        <img src="img/<?= htmlspecialchars($img) ?>" alt="Avatar" class="anhh">
               <?php }
                    } else { // Nếu chỉ có một ảnh, hiển thị bình thường
                 ?>
                  <img src="img/<?=$tt["anh"]?>" alt="" class="anhh">
                  
    <?php } ?>
</td>

            <td><?=$tt["nd6"]?></td>
            <td><?=$tt["nd7"]?></td>
            <td>
                <?php
                if(is_array($tt["nd8"])){//nếu là mảng thì lặp qua từng ảnh
                    foreach($tt["nd8"] as $nd8) { ?>
                    <img src="img/<?=htmlspecialchars($nd8)?>" alt="" class="anh_nd8">
                    <?php
                    }
                }else{//nếu chỉ có môt ảnh , hiển thi bìng thường
                    ?>
                    <img src="img/<?=$tt["nd8"]?>" alt=""class="anh_nd8">

                    <?php

                }
                ?>
            </td>
        </tr>
        <?php    
        }
        ?>
    </table>
    <label for="">nhap tem:</label>
    <input type="text" name="ten">

    <input type="submit" value="GUI" name="gui">
</body>
</html>
