<?php
// write a program that displays where a number between range 0-999 is 1 digit or 2 digit or 3 digit
$num = 573;
if($num<0){
    echo "The number should be between 0-999";
}
elseif($num<10){
    echo "The number has 1 digit";
}
elseif($num>=10 and $num<100){
    echo "The number has 2 digit";
}
elseif($num>=100 and $num<1000){
    echo "The number has 3 digit";
}
else{
    echo "The number should be between 0-999";
}

?>