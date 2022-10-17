<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
    <h1>計算自己的生日</h1>
    <?php
    $myBirth="2023/10/7";  //----生日日期---//
    $now='now';
    $diff =strtotime($now)- strtotime($myBirth);
 
    $days=abs(floor($diff/86400));
    $hours=abs(floor(($diff%86400)/3600));
    $min=abs(floor(($diff%3600)/60));    
    $sec=abs($diff%60);     
    ?>
    <?php if($diff>0){ ?>
    <h3>距離我的生日 <?=$myBirth;?> 還有 <?=$days;?>天<?=$hours;?>時<?=$min;?>分 <?=$sec;?>秒  </h3> 
    <?php     }
    else{ ?>
    <h3>距離我的生日  <?=$myBirth;?> 已過了 <?=$days;?>天<?=$hours;?>時<?=$min;?>分 <?=$sec;?>秒  </h3> 
    <?php }?>
    <hr>
    <input type ="button" onclick="history.back()" value="回到上一頁"></input>
</body>
</html>