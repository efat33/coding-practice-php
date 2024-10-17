<?php

// input from questions
$array = [4, 7, 6, 3, 1];

// Approach 1: Iterative, loop through array, Brute force

function solution_1($array)
{
   $max = $array[0];
   $array_length = count($array);

   for ($i = 1; $i < $array_length; $i++) {
       if ($array[$i] > $max) {
           $max = $array[$i];
       }
   }
   return $max;
}


$output = solution($array);

echo $output;


// Approach 2: Sorting, sort the array first in descending order, then grab the first element.

function solution_2($array)
{
   rsort($array);

   return $array[0];
}

$output = solution($array);

echo $output;
