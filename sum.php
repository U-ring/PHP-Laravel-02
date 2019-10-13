<?php
function sum($i) {
    $result = $i*2;
    
    return $result;
}

echo sum(22)."\n";
function cum($a,$b){
  $result = $a+$b;
  
  return $result;
}
echo cum(1,3);
echo "\n";

function multi($arr) {

 $mul = 1;
 foreach($arr as $brr){
   $mul *=$brr;
 }
 return $mul;
}
$arr = array(1,3,5,7,9);
echo multi($arr) . "\n";

 function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
   if($max_number < $a) {
     $max_number = $a;
   }
  }  
  return $max_number;
 }
echo max_array($arr) . "\n";

$string = "<title>Batty's Coffee Stand</title>";
$result = strip_tags($string);
echo $result . "\n";

$Tokyo = array("豊島区","渋谷区","新宿区");
array_push($Tokyo,"港区","千代田区");
print_r($Tokyo) ."\n";

$sneaker = array("balenciaga" => "triple s","raf simons" => "ozweego","off-white" =>"AIR PRESTO");
$add_sneaker = array("raf simons" =>"detroit runner","LOUIS VUITTON" =>"archlight");
$result = array_merge($sneaker,$add_sneaker);
print_r($result) ."\n";

date_default_timezone_set('Asia/Tokyo');

$now = time();
print $now . "\n";

$timestamp = mktime(16,43,24,13,10,13);
print $timestamp . "\n";

echo date('Y/m/d') . "\n";


