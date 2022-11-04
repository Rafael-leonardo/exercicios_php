<?php

$number1 = 10;
$number2 = 15;
$number3 = 1;

echo "$number1 x² + $number2 x + $number3" . PHP_EOL;

$delta = ( $number2 ** 2 ) - 4 * $number1 * $number3 ;

if ( $delta > 0 ) {
    $x1 = ( - $number2 + sqrt( $delta )) / ( 2 * $number1 );
    $x2 = ( - $number2 - sqrt( $delta )) / ( 2 * $number1 );
    if ( $x1 > $x2 ) {
        echo "as raizes são $x2 e $x1.";
    } elseif ( $x2 > $x1 ) {
        echo "as raizes são $x1 e $x2.";
    } else {
        echo "as duas raizes são $x1";
    }
} else {
    echo "não há raizes nesta equação.";
};