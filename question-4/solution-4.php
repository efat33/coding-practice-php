<?php

// input from questions
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];


function solution($array)
{
   $even = 0;
   $odd = 0;

   foreach ($array as $value) {
       if ($value % 2 == 0) {
           $even++;
       } else {
           $odd++;
       }
   }
   
   echo "Total even elements: $even";
   echo "<br>Total odd elements: $odd";
}


$output = solution($array);
