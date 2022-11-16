<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

for ($i=1; isset($str[$i]); $i++){
   
    $a = $str[$i++];
    $b = $str[$i--];

    $a = $b;
    $str[$i] = $a;
}

echo "$str"

?>