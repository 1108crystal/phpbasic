<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給定兩個日期，計算中間間隔天數</title>
</head>

<body>
    <h1>計算日期間隔</h1>
    設有兩個日期:
    <div>2022-09-10</div>
    <div>2022-10-21</div>
    請計算間隔日數:
    
    <?php
    $a = "2022-09-10";
    $b = "2022-10-21";
    $c = date("d", strtotime($b) - strtotime($a));
    echo $c;
    echo "<hr>";
    if (isset($_POST['start_day']) && $_POST['start_day'] !== ""  && isset($_POST['end_day']) && $_POST['end_day'] !== ""){
        $start_day = $_POST['start_day'];
        $end_day   = $_POST['end_day'];
        
        echo $start_day."<br>";
        echo $end_day."<br>";


    }else{
        $start_day="";
        $end_day="";
    }

    ?>

    <hr>
    <h3>請輸入日期=></h3>
    <form action="date_part01.php" method="post">
        <label for="start_day">起始日:</label>
        <input type="date" name="start_day" id="start_day" value="2022-09-10">
        <label for="end_day"> 結數日:</label>
        <input type="date" name="end_day" id="end_day" value="2022-10-21">

        <br>
        <input type="radio" id="ans1" name="ans1" value="ans1" checked>
        <label for="huey">包含起始日</label>
        </div>
        <div>
            <input type="radio" id="ans2" name="ans2" value="ans2">
            <label for="dewey">不包含起始日 </label>
        </div>
        <div>
            <input type="radio" id="ans3" name="ans3" value="ans3">
            <label for="louie">不包含結數日</label>
        </div>
        
        <input type="submit" value="計  算">
        <hr>
        <input type ="button" onclick="history.back()" value="回到上一頁"></input>
    </form>
</body>

</html>