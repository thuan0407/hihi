<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        tải file <input type="file" name="anh"><br>
        <input type="submit" value="gửi file lên sever" name="gui"><br>
    </form>
    <?php
    if(isset($_POST['gui'])){
        echo "<pre>";
        print_r($_FILES['anh']);

        $anh =$_FILES['anh']['name'];
        $tmp =$_FILES['anh']['tmp_name'];
        move_uploaded_file($tmp,"upload/".$anh);
        
        if($_FILES['anh']['error']!==0){
            echo "upload thất bại. mã lỗi :".$_FILES['anh']['error'];
         
        }
        else{
            echo "upoad file thành công!";
            echo "<img src='upload/$anh' alt='' width='600' height='300'>";

        }
    }
    ?>
    
</body>
</html>