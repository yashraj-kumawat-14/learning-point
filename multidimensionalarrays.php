<?php
echo "welcome to multidimensional arraysin php";
// $list = ["yash"=>"black"];
// echo "<br>",$list["yash"];

$multi = array(
    array(1,2,3,4,5),
    array(2,3,4,5,6),
    array(3,6,9,12,15)
);
echo $multi[2][3];
echo "<br>";
for($i=0;$i<count($multi);$i++){
    for($j=0;$j<count($multi[$i]);$j++){
        echo $multi[$i][$j],"<br>";
    }
}
?>
