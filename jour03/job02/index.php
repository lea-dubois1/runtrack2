<?php

$texte = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$key = 0;

while (isset($texte[$key]) === true){

    if($key % 2 == 0){
        echo "$texte[$key]";
        $key++;
    }else {
        $key++;
    }

}

?>