<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method=post>
        <label for="">Nhập cạnh thứ nhất:</label>
        <input type="text" name="c1" required>
        <br><br>

        <label for="">Nhập cạnh hai:</label>
        <input type="text" name="c2"required>
        <br><br>

        <label for="">Nhập cạnh thứ ba:</label>
        <input type="text" name="c3"required>

         <input type="submit" value="GUI" name="gui">
    </form>

    <?php
    if(isset($_POST['gui'])){
        $c1=$_POST['c1'];
        $c2=$_POST['c2'];
        $c3=$_POST['c3'];
        if($c1>0 && $c2>0 && $c3>0){
            if(($c1 + $c2 >$c3)&&($c1 + $c3 > $c2) && ($c2 + $c3 >$c1)){
                echo "3 canh lập thành một tam giác";
            }
            else{
                echo "3 cạnh không lập thành một tam giác";
            }

        }
        else{
            echo "3 cạnh của tam giác phải lớn hơn 0";
        }

    }
    ?>




    

</body>
</html>