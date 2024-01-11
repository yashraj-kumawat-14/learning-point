<?php
echo "foreach llop", "<br><br>";
$arra = array('apples', "mango", "harph");
for($i=0;$i<count($arra);$i++){
    echo $arra[$i],"<br>";
}
//  better way to do this
foreach($arra as $yash){
    echo $yash, "<br>";
}
?>