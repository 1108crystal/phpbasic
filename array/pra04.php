<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫三角形</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h2>直角三角形</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>

    <h2>倒直角三角形</h2>
    <?php
    for ($i = 5; $i >= 1; $i--) {

        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }

        echo "<br>";
    }

    ?>
    <h2>正三角形</h2>

    <?php
    for ($i = 1; $i <= 5; $i++) {

        for ($k = 5 - $i; $k > 0; $k--) {
            echo "&nbsp;";
        }

        for ($j = 1; $j <= ($i * 2 - 1); $j++) {
            echo "*";
        }

        echo "<br>";
    }

    ?>

    <h2>菱形</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {

        for ($k = 5 - $i; $k > 0; $k--) {
            echo "&nbsp;";
        }

        for ($j = 1; $j <= ($i * 2 - 1); $j++) {
            echo "*";
        }

        echo "<br>";
    }
    for ($i = 1; $i <= 4; $i++) {

        for ($k = 1; $k <= $i; $k++) {
            echo "&nbsp;";
        }

        for ($j = 1; $j <= ((5 - $i) * 2 - 1); $j++) {
            echo "*";
        }

        echo "<br>";
    }

    ?>

    <h2>菱形2</h2>
    <?php
    $scale = 9;
    $scale = ($scale % 2 == 0) ? $scale + 1 : $scale;
    $mid = ($scale - 1) / 2;
    for ($i = 0; $i < $scale; $i++) {
        if ($i <= $mid) {
            $spaces = $mid - $i;
            $stars = $i * 2 + 1;
        } else {
            $spaces = $i - $mid;
            $stars = ($mid - $spaces) * 2 + 1;
        }

        for ($j = 0; $j < $spaces; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $stars; $k++) {
            echo "*";
        }
        echo "<br>";
    }


    ?>

<h2>中空菱形</h2>
    <?php
    $scale = 11;
    $scale = ($scale % 2 == 0) ? $scale + 1 : $scale;
    $mid = ($scale - 1) / 2;
    for ($i = 0; $i < $scale; $i++) {
        if ($i <= $mid) {
            $spaces = $mid - $i;
            $stars = $i * 2 + 1;
        } else {
            $spaces = $i - $mid;
            $stars = ($mid - $spaces) * 2 + 1;
        }

        for ($j = 0; $j < $spaces; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $stars; $k++) {
            if($i==0 || $i==$scale-1 || $k==0 || $k==$stars-1){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }


    ?>

    <h2>矩形</h2>
    <?php

    for ($i = 0; $i < 7; $i++) {

        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 || $i == 6 || $j == 0 || $j == 6) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }

        echo "<br>";
    }
    ?>

    <h2>矩形+對角線</h2>
    <?php

    for ($i = 0; $i < 7; $i++) {

        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 || $i == 6 || $j == 0 || $j == 6 || $i==$j || $i==6-$j) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }

        echo "<br>";
    }
    ?>

<h2>中空菱形+對角線</h2>
    <?php
    $scale = 11;
    $scale = ($scale % 2 == 0) ? $scale + 1 : $scale;
    $mid = ($scale - 1) / 2;
    for ($i = 0; $i < $scale; $i++) {
        if ($i <= $mid) {
            $spaces = $mid - $i;
            $stars = $i * 2 + 1;
        } else {
            $spaces = $i - $mid;
            $stars = ($mid - $spaces) * 2 + 1;
        }

        for ($j = 0; $j < $spaces; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $stars; $k++) {
            if($i==0 || $i==$scale-1 || $k==0 || $k==$stars-1 || $i==$mid || $k==$mid-$spaces){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }


    ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>

</html>