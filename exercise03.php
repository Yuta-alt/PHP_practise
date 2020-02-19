<?php
$name="Yuta";
if($name="Yuta"){
    echo"私はあなたの名前です ";
}else{
    echo"あなたの名前ではありません ";
}
echo "\n";

$total=0;
echo $total;
for($i=0; $i<=1000; $i++){
    $total += $i;
}
echo $total;

echo "\n";

$fruits=array("apple", "grape", "orange", "peach", "sweet potato");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

echo "\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
//   $i=array($i % 5 == 0);
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
        // $i += 5 - ($i % 5);
// {
//   foreach($i as $i){
//       echo "". $i;
//   }

echo "\n";

// 1から100までを順番に表示する関数
function print_number(){

    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}