<?php
$name = '貴希';
if ($name = '貴希') {
 echo '私は貴希です。';
}else {
  echo '私は貴希ではありません。';
}

$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("apple","pineapple","grape","peach","orange");

foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}

for($i = 0; $i <= 100; $i+=5){
  echo $i;
}