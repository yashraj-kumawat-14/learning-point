<?php
echo "Welcom to the functions tutorial<br>";
function abc($x){
    $sum=0;
    foreach($x as $i){
        $sum +=$i;
    }
    return $sum;
}

$m1 = [11, 21, 33,44, 44];
$m2 = [50, 50, 50, 50, 50];
echo "marks of student 1 is", abc($m1),"<br>";
echo "marks of student 2 is", abc($m2),"<br>";

?>
