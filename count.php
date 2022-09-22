<?php 
$array = array(10,9,3,6,5,6,7,8,0);

$sum = array_sum($array);

$avg = $sum/count($array);

$count = 0;

foreach ($array as $a){

if($a == $avg){

$count++;

}

}

print_r($count);


?>