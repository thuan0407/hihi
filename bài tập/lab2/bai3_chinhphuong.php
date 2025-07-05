=<!DOCTYPE html>
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
        <br>

        <input type="submit" value="gui" name="gui">
        <br>

    </form>

    <?php
    if(isset($_POST['gui'])){
    $n=$_POST['n'];
    $nn=sqrt($n);
    
    if(sqrt($n)==intval(sqrt($n))){
        echo "số ".$n." là số chính phương";
    }
    else{
        echo "số ".$n." không phải là số chính phương";
    }
}
    ?>
</body>
</html>