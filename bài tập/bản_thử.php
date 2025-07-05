<?php
$user = [
    ["nd1" => "Philipie Gurney", "nd2" => "Web Design - Shopping", "nd3" => "02-13-2024", "nd4" => "$0.00", "anh" => "anh1.jpg", "nd6" => "Graphic Design", "nd7" => "Converted", "nd8" => ["thung_rac.jpg", "thu.jpg", "anh_2.jpg", "mui_ten.jpg", "ba_cham.jpg"]],
    ["nd1" => "Philipie Gurney", "nd2" => "Web Design - Shopping", "nd3" => "02-13-2024", "nd4" => "$0.00", "anh" => "anh1.jpg", "nd6" => "Graphic Design", "nd7" => "Converted", "nd8" => "anh.jpg"],
    ["nd1" => "Philipie Gurney", "nd2" => "Web Design - Shopping", "nd3" => "02-13-2024", "nd4" => "$0.00", "anh" => "anh1.jpg", "nd6" => "Graphic Design", "nd7" => "Converted", "nd8" => "anh.jpg"],
    ["nd1" => "Philipie Gurney", "nd2" => "Web Design - Shopping", "nd3" => "02-13-2024", "nd4" => "$0.00", "anh" => "anh1.jpg", "nd6" => "Graphic Design", "nd7" => "Converted", "nd8" => "anh.jpg"],
    ["nd1" => "Philipie Gurney", "nd2" => "Web Design - Shopping", "nd3" => "02-13-2024", "nd4" => "$0.00", "anh" => "anh1.jpg", "nd6" => "Graphic Design", "nd7" => "Converted", "nd8" => "anh.jpg"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách</title>
    <style>
        body {
            width: 1200px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr {
            height: 80px;
            border-bottom: 1px solid black;
        }
        .anhh {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }
        .anh_nd8 {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }
        .mauxanh {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Danh Sách</h1>
    <table>
        <tr>
            <td class="mauxanh"> <input type="checkbox" name="radio" class="checkbox"> Contact</td>
            <td class="mauxanh">Title</td>
            <td class="mauxanh">Created</td>
            <td class="mauxanh">Value</td>
            <td class="mauxanh">Assigned</td>
            <td class="mauxanh">Category</td>
            <td class="mauxanh">Status</td>
            <td class="mauxanh">Action</td>
        </tr>
        <?php foreach ($user as $tt) { ?>
        <tr>
            <td><input type="checkbox" name="radio" class="checkbox"> <?= htmlspecialchars($tt["nd1"]) ?></td>
            <td><?= htmlspecialchars($tt["nd2"]) ?></td>
            <td><?= htmlspecialchars($tt["nd3"]) ?></td>
            <td><?= htmlspecialchars($tt["nd4"]) ?></td>
            <td>
                <img src="img/<?= htmlspecialchars($tt["anh"]) ?>" alt="Avatar" class="anhh">
            </td>
            <td><?= htmlspecialchars($tt["nd6"]) ?></td>
            <td><?= htmlspecialchars($tt["nd7"]) ?></td>

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
        <?php } ?>
    </table>
</body>
</html>
