<?php

// input from questions
$array = [4, 5, 3, 1, 2];
$x = 3;


function solution($array, $x)
{
   $elements = 0;
   
   foreach ($array as $value) {
       if ($value > $x) {
           $elements++;
       }
   }

   return $elements;
}

$output = solution($array, $x);

echo $output;
