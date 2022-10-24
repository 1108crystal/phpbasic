<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆</title>
    <style>
        table {
            border: 2px double blue;
        }
        tr {
            border: 1px solid #ccc;
        }

        td {
            border: 1px solid #ccc;
        }
        td:nth-child(6),td:nth-child(7){
            background-color:pink;
            
        }
    </style>
</head>

<body>
    <h3>日曆方式一:Table</h1>
        <hr>
        <?php
        
        // $str_style=($date==$monthDays)?"style=background-color:lightgray;":" style=background-color:lightgray;" ;
        $str_style="style='background-color:lightgray'";

        $year = date("Y");
        $month = date("n");
        $today=date('j');
        echo "今天是$today 號";
        // echo $year.'-'.$month;
        // $firsdDate = $year . '-' . $month . '-1';
        $firsdDate = date("Y-m-1");
        $firsdDateWeek = date('N', strtotime($firsdDate));
        $monthDays = date("t", strtotime($firsdDate));
        echo $monthDays . "<br>";
        echo $firsdDate . "<br>";
        echo "<br>";
        echo "本月第一天是星期:";
        echo $firsdDateWeek;


        ?>
        <table>
            <tr>
                <td>一</td>
                <td>二</td>
                <td>三</td>
                <td>四</td>
                <td>五</td>
                <td>六</td>
                <td>日</td>
            </tr>
            <?php

            for ($i = 1; $i <=7; $i++) {
                echo "<tr>";
                
                for ($j = 1; $j <= 7; $j++) {
                    $date=($i-1)*7+$j-($firsdDateWeek-1);
                    if ($i == 1) {
                        if ($j >= $firsdDateWeek) {
                            echo "<td $str_style> ";
                            echo $date;
                            echo "</td>";
                        } else {
                            echo "<td></td>";
                        }
                    } else {
                        echo "<td>";
                        
                        if($date<=$monthDays){
                            
                            echo $date;
                        }
                        echo "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>


</body>

</html>