<?php

require('Recursion.php');


$numbers = range(1, 200, 5); 

$number = 31; 
if (RecursionSearch::binarySearch($numbers, $number, 0, count($numbers) - 1) !== FALSE) { 
    echo "$number Found \n"; 
} else { 
    echo "$number Not found \n"; 
} 

echo "find x 2";

$number = 500; 
if (RecursionSearch::binarySearch($numbers, $number, 0, count($numbers) - 1) !== FALSE) { 
    echo "$number Found \n"; 
} else { 
    echo "$number Not found \n"; 
}