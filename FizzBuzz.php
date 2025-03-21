<?php


 function fizzBuzz($begin, $end) {
for ($begin = $begin; $begin <= $end; $begin++) {
    
    if ($begin % 3 == 0 && $begin % 5 != 0) {
        echo Fizz;
    } 
    if ($begin % 5 == 0 && $begin % 3 != 0) {
        echo Buzz;
    } 
    if ($begin % 3 == 0 && $begin % 5 ==0) {
        echo fizzBuzz;
    } 
    if ($begin % 3 != 0 && $begin % 5 != 0) {
        echo "$begin";
    } if ($begin < $end) {
            echo  ;
        }
    }
}

 print_r(fizzBuzz(8, 20));
