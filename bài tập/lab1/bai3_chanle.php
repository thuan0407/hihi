<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Tên</title>
</head>
<body>

   <form action=""method=post>
    <label for="">Nhập số nguyên:</label>
    <input type="number" name="so">
    <input type="submit" value="GUI" name="gui">

   </form>

   <?php

   if(isset($_POST['gui'])){
      $so=$_POST['so'];
      if($so %2 ==0){
         echo "số ".$so." là số chẵn";
      }
      else{
         echo "số ".$so." là số lẻ"; 
   }
}
   ?>

</body>
</html>
