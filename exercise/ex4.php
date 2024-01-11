<?php
// write a program that displays where a number between range 0-999 is 1 digit or 2 digit or 3 digit using nested if-else

$num =3333;
if($num<0){
    echo "The number should be between 0-999";
}
else{
    if($num<10){
        echo "The number has 1 digit";
    }
    else{
        if($num>=10 and $num<100){
            echo "The number has 2 digit";
        }
        else{
            if($num>=100 and $num<1000){
                echo "The number has 3 digit";
            }
            else{
                echo "The number should be between 0-999";
            }
        }
    }
}
?>