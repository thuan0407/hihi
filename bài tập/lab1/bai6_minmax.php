<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method=post>
        <label for="">Nhap so x:</label>
        <input type="text" name="x"  required> 
        <br><br>

        <label for="">Nhap so y:</label>
        <input type="text" name="y"  required>
        <br><br>

        <label for="">Nhap so z:</label>
        <input type="text" name="z"  required>
        <br><br>

        <input type="submit" value="gui" name="gui">

    </form>


    <?php
    if(isset($_POST['gui'])){
        $x=$_POST['x'];
        $y=$_POST['y'];
        $z=$_POST['z'];
        if($x>$y && $x>$z){
            echo "Số lớn nhất là: x = ".$x;
        }
        elseif($y>$x &&$y>$z){
            echo "Số lớn nhất là: y = ".$y;
        }
        else{
            echo "Số lớn nhất là: z = ".$z;
        }
    }

    ?>
</body>
</html>