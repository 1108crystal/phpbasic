<h1>璇轉陣列</h1>
<h3>給定一個陣列有K個元素及旋轉N的次數,回傳旋轉完成後的陣列</h3>

<?php

$array=[3,2,1,5,6];//=>[1,5,6,3,2]
echo "旋轉前==>[".join(',',$array)."]<br>";
$n=3;
$t=0;
$k=count($array);
for($i=0;$i<$n;$i++){
    $t=$array[$k-1];
    for($j=0;$j<$k;$j++){
        if(($k-2-$j)>=0){
            $array[$k-1-$j]=$array[$k-2-$j];            
        }else{
            $array[$k-1-$j]=$t;            
        }
    }

}
echo "旋轉後==>[".join(',',$array)."]<br>";
?>