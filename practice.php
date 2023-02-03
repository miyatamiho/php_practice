<?php
echo 'hello php!' . "\n";

$a = 3;
$b = 7;
echo $a + $b . "\n";

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7] . "\n";

$hello = "Hello,";
$name = "MiyataMiho";
$world = "'s World!";
echo $hello . $name . $world . "\n";

$tech_boost = "tech";
$tech_boost .= "_boost";
echo $tech_boost . "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"] . "\n";

if ($name == "MiyataMiho"){
  echo "私は　宮田美穂　です" . "\n";
}else{
  echo "宮田美穂ではありません" . "\n";
} 

for($i = 0; $i < 10000; $i++){
  echo $i . "\n";
}

$fruits = array("apple","lemon","orange","melon","banana");
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){
  if($i % 5 === 0){
    echo $i . "\n";
  }
}

