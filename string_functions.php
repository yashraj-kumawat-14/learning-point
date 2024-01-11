<?php
$name = " a yash  raj ";
echo $name;
echo "<br>", var_dump(strlen($name)), "<br>";
echo "$name"."$name"; 
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, " a");
echo str_replace("  raj", "raj", $name);
echo str_repeat($name, 3);
echo "<br>";
echo "<pre>";
// echo rtrim("   yash   a");
echo trim("    y   ");
echo "</pre>";

?>