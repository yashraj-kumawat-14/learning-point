<?php
// write a program which use for loop to display cube of numbers in range 15 to 20

$start = 15;
$end = 20;
for($i=$start;$i<($end+1);$i++){
    echo "The cube of $i is ", ($i**3),"<br>";
}

?>