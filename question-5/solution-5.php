<?php

/**
* Cases:
*
* Logic:
*
* Approach:
*
* 1) Declare two variables max1 and max2 to store the first and second largest elements. Store minimum integer value in both i.e. max1 = max2 = PHP_INT_MIN.
* 2) Iterate through all array elements. Inside the loop, check if the current array element is greater than max1, then make largest element (max1) as second largest and current array element as largest. Say, max2 = max1 and max1 = arr[i]
* 3) Else if the current array element is greater than max2 but less than max1 then make current array element as second largest i.e. max2 = arr[i]
*
*/


// input from questions
$array =  [-7, 2, 3, 8, 6, 6, 75, 38, 3, 2];


function solution($array)
{
   $max1 = $max2 = PHP_INT_MIN;


   foreach ($array as $value) {
       if ($value > $max1) {
           $max2 = $max1;
           $max1 = $value;
       } else if ($value > $max2 && $value < $max1) {
           $max2 = $value;
       }
   }


   echo $max2;
}


$output = solution($array);
