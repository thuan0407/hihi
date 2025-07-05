<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="post">
        <label for="">Nhập số:</label>
        <input type="text" name="n">
        <br><br>

        <input type="submit" value="gui" name="gui">
        <br><br>

    </form>

   
     <?php
     if(isset($_POST['gui'])){
     $n=$_POST['n'];
     $i=1;
     $sum=1;
     $j=1;
     for ($j=1; $j<=$n; $j++){
        echo "Bảng cửu chương của ".$j;
        echo "<br>";
     for ($i=1; $i<=10; $i++){
        $sum=$j*$i;
        echo "-  ".$j." * ".$i." = ".$sum;
        echo "<br>";
     }
     echo "<br>";
    }
  
 }
     ?>
  
</body>
</html>