<?php
echo "scope of variables<br>";
$a = 34;
function printt(){
    // $a= 45;
    global $a;
    $a=4554;
    echo "value of a is $a";
}
echo "value of a is $a";
printt();
echo "value of a is $a";
?>
<?php
echo $a;
?>
