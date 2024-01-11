<?php
// program that reads a line and prints its statistics like

/* Output : Number of uppercase letters :
            Number of lowercas letters :
            Number of alphabets :
            Number of digits :
    */

$string = "HeLLo123g3";

$numLowercase = 0;
$numUppercase = 0;
$numDigits = 0;

for($i=0;$i<strlen($string);$i++){
    if(ctype_digit($string[$i])){
        $numDigits+=1;
    }
    elseif(ctype_lower($string[$i])){
        $numLowercase+=1;
    }
    elseif(ctype_upper($string[$i])){
        $numUppercase+=1;
    }
    else{
    }
}
$numAlphabet = $numUppercase+$numLowercase;
echo "Number of digits :", $numDigits,"<br>";
echo "Number of uppercase letters :", $numUppercase,"<br>";
echo "Number of lowercase letters :", $numLowercase,"<br>";
echo "Number of uppercase letters :", $numAlphabet,"<br>";

?>