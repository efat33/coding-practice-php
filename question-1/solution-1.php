<?php

// input from questions 
$numbers = [7, 3, 5, 2, 1];
$x = 3;

function solution($array, $x)
{
   $output = "NO";

   foreach ($array as $index => $value) {
     
       // x is equal to value, if equal, array contains this value
       if ($value == $x) {
           $output = "YES";
           break;
       }
   }

   return $output;
}


$output = solution($numbers, $x);


echo $output;
