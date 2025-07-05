<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
       
    </style>
</head>
<body>
<form action=""method="post">
       <label for="">nhập số:</label> <input type="text" name="so">
       <div class="gui">
       <input type="submit" value="GUI" name="guitt">
       </div>
    </form>

    <?php
    if(isset($_POST['guitt'])){
        $so=$_POST['so'];
        if($so<30){
            echo "tuổi của bạn nhỏ hơn 30!";
        }
        else if($so>30 && $so <=40){
            echo "tuổi của bạn ở khoảng 30 đến 40!";
        }
        else if($so>40 && $so<=50){
            echo "tuổi của bạn ở khoảng 40 đến 50!";
        }
        else {
            echo "tuổi của bạn lớn hơn 50!";
        }
    }

    ?>
</body>
</html>