<?php
$rockbands =[
    'Beatles'=>['love me do','hey jude','helter skelter'],
    'Bolling stones '=>['waiiting on a friend','angie','yesterday\ ','s papers'],
    'Eag les'=>['life in the fasst lane','hotel californnia','bets of my love']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Dimensional Assoiative Arrays</title>
    <style>
        table{
            border:2px solid black;
            border-collapse: collapse;
        }
        td{
            border-bottom:2px solid black;
            border-left:2px solid black;
            padding:5px;

        }
        .dam{
            font-weight:bold;
        }
    </style>
</head>
<body>
    <table>
        <h1>Two-Dimensional Assoiative Arrays</h1>
        <tr>
            <td class="dam">Rockband</td>
            <td class="dam">Song 1</td>
            <td class="dam">Song 2</td>
            <td class="dam">Song 3</td>
        </tr>

        <?php
        foreach($rockbands as $key => $tt){?>
        <tr>
            <td style='font-weight:bold;'><?=$key?>:</td>
            <td><?=$tt[0]?></td>
            <td><?=$tt[1]?></td>
            <td><?=$tt[2]?></td>
            
            
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>