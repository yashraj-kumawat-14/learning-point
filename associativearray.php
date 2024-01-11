<?php
echo "arrays in php";
$a = array(1, 2, 3, 4);//numeric or indexa array
echo "<br>";
echo $a[1],"<br>";
echo $a[2],"<br>";
echo $a[3],"<br>";
// associative arrays key value pairs
$favlan=array(
    "yash"=>"english",
    "kundan"=>"blue",
    45=>"numberAsKey"
);

echo $favlan["yash"],"<br>";
echo $favlan[45],"<br>";
foreach($favlan as $key=>$value){
    echo $key," ",$value," <br>";
}
?>
