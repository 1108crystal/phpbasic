<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用迴圈來計算連續五個周一的日期</title>
</head>
<body>
    <h1>利用迴圈來計算連續五個周一的日期</h1>
    
    <hr>
    <p>今天是<?=date('y/m/d l');?></p>
    <p>接下來續五個周一的日期為:</p>
    <?php

    for($i=0;$i<5;$i++){

        $sec=strtotime("+".($i+1)." week");
        echo date('N',$sec)."<br>";
        echo date("Y-m-d l",$sec)."<br>";
    }

    ?>


    
</body>
</html>