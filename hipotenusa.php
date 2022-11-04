<?php 

$cateto = 16;
$catato2 = 49;

$cateto = pow($cateto, 2);
$cateto2 = pow($catato2, 2);

$cateto = sqrt($cateto);
$cateto2 = sqrt($catato2);

$hipotenusa = $cateto + $catato2;

echo "o valor da hipotenusa dos catetos $cateto e $cateto2 é $hipotenusa";