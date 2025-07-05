<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
       <label for="">nhập số:</label> <input type="text" name="so">
       <input type="submit" value="GUI" name="guitt">
    </form>
    <?php
    if(isset($_POST['guitt'])){
        $so=$_POST['so'];
        if($so==0){
            echo "so $so không phải số âm , không phải số dương ";
            
        }
        else if($so>0){
            echo "so $so là số dương";
        }
        else{
            echo "so $so là số âm ";
        }
    }
    ?>


</body>
</html>