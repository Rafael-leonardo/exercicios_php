<?php 

function fizzbuzz($number) {
    if ($number % 3 == 0 and $number % 5 == 0){
        echo "FizzBuzz";
    } elseif ($number % 5 != 0 and $number % 3 == 0){
            echo "Fizz";
    } elseif ($number % 5 == 0 and $number % 3 != 0){
        echo "Buzz";
    } elseif ($number % 3 != 0 and $number % 5 != 0) {
        echo "O numero: $number não se enquadra em nenhuma condição.";
    };
};

fizzbuzz(15);