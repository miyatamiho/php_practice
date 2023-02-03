<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100) . "\n";



function double($a)
{
   $result = $a * 2;
   return $result . "\n";
}


function add($a,$b){
    $sum = $a + $b;
    return $sum . "\n";
}


function kadai3($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;

}
echo (kadai3([1, 3, 5, 7, 9])) . "\n";


function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
     if($a > $max_number){
         $max_number = $a;
     }
    }
    return $max_number;
}
echo (max_array([1, 3, 11, 7, 9])) . "\n";

//タグを取り除く
$str = "<h1>strip_tags<h1>" . "<p>タグを取り除く</p>";
echo strip_tags($str) . "\n";

//配列に追加する
$harfayear = array("january","febuary","march");
array_push($harfayear,"april","may","june");
print_r($harfayear) . "\n";

//配列に配列を結合する
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];

$array = array_merge($array1,$array2);
print_r($array) . "\n";

//現在のタイムスタンプを返す
echo "Now:". time() . "\n";

//任意の日時のタイムスタンプを返す
$time = mktime(0, 0, 0, 2, 2, 2023,);
echo  $time . "\n";

//現在日時もしくは指定日時を任意の形式にフォーマットし日時情報を返す
echo date("Y/M/D") . "\n";



