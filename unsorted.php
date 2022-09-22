<?php 

$array = array(1,4,3,4);

       $max = max($array);

       $min = min($array);

       $max_count = 0;

       $min_count = 0;

       foreach ($array as $a){

           if($a == $max){

               $max_count++;

           }

       }

       foreach ($array as $b){

           if($b == $min){

               $min_count++;

           }

       }

       $average = ($max*$max_count+$min*$min_count)/($min_count+$max_count);

print_r($average);

?>