<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期函式</title>

</head>
<body>
    <h3>日期基礎函式</h3>
    <h4>Date()</h4>
    <hr>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("西元Y年m月d日 H:i:s l");
?>
<h2>strtotime()</h2>
<?php 
$now=strtotime('now');
$now=$now+(60*60*24)*10;
echo $now;
echo "<br>";
echo date("西元Y年m月d日 H:i:s l",$now);
echo "<hr>";

$tomorrow=strtotime("+1 day");
echo date('Y-m-d H:m:s' )."<br>";
echo date('Y-m-d H:m:s' ,$tomorrow)."<br>";
?>
<h2>練習</h2>
<ul>
    
    <li><a href="date_part01.php">練習一:給定兩個日期，計算中間間隔天數</a></li>
    <li><a href="date_part02.php">練習二:計算距離自己下一次生日還有幾天</a></li>
    <li><a href="date_part03.php">練習三:利用date()函式的格式化參數，完成以下的日期格式呈現</a></li>
    <li><a href="date_part04.php">練習四:利用迴圈來計算連續五個周一的日期</a></li>
    <hr>
    <li><a href="calendar.php">練習五:月曆【10/24】</a></li>

</ul>
</body>
</html>