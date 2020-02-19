<?php

// Q1
function twiceNumber($i){
     return $i * 2;
}
echo twiceNumber(6)."\n";

// Q2
function f($a, $b){
    return $a+$b;
}
echo f(4, 5)."\n";

// Q3
$arr=array(1,3,5,7,9);
echo array_product($arr)."\n";

// Q4
//  function max_array($arr){
// // とりあえず配列の最初の要素を一番大きい値とする
//  $max_number = $arr[0];
//  foreach($arr as $a){
//  //どうしたらいいかわからない・・・・
//  }

//  return $max_number;
//  }
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number=$a;
        }
    }
    return $max_number;
}
echo max_array(array(12,98,34,-45,88,41))."\n";


// Q5
// strip_tags
$str="<h1>strip_tags関数</h1>" ."<p>タグ取り除くよ！</p>";
echo strip_tags($str)."\n";

$str=<<<EOM
<h1>strip_tags関数</h1>
<p>タグ取り除くよ！</p>
EOM;
var_dump(strip_tags($str,"<p>"))."\n";

// array_push
$fruits=["apple","orange","grape"];
array_push($fruits,"melon","banana");
print_r($fruits)."\n";

// array_merge
$array1=[1,2,3];
$array2=[10,20,30];
$array3=[100,200,300];
$array=array_merge($array1,$array2,$array3);
print_r($array)."\n";

// time
$t=time();
echo $t."\n";

// mktime
echo date("Y/m/d H:i:s",mktime(0,0,0,3,0,2012))."\n";

// date
$date=time();
echo $date."\n";
// テスト