<?php

// write a program that multiplies two integer numbers without using * operator , using repeated addition

$num1 = 6;
$num2 = 10;
$sum = 0;
for($i=0;$i<$num2;$i++){
    $sum+=$num1;
}
echo "the multiplication of $num1 and $num2 is ", $sum;

?>