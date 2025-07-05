<?php
$arr=[
    "green"=>"dòng màu xanh",
    "red"=>"dòng màu đỏ",
    "blue"=>"dòng màu xanh da trời",
    "brown"=>"dòng màu nâu",
    "yellow"=>"dòng màu vàng",
    "purple"=>"dòng màu tím",
    "gray"=>"dòng màu xám"
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Table</title>
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;

        }

        td{
            border-bottom:1px solid black;
            padding:10px;
            width: 500px;
        }
        .hh{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <h1>Color Table</h1>
     <table>
        <tr>
            <td class="hh">color</td>
        </tr>
     <?php
     foreach($arr as $color =>$value){
           echo "<tr style='background-color: $color; color: black;'>
             <td > $arr[$color]</td>

        </tr>";
      

     }
     ?>
     </table>
    
</body>
</html>