<?php

$texte = "I'm sorry Dave I'm afraid I can't do that";
$key = 0;

while (isset($texte[$key]) === true){

    if($texte[$key] == "a" || $texte[$key] == "e" || $texte[$key] == "i" || $texte[$key] == "o" || $texte[$key] == "u" || $texte[$key] == "y" || $texte[$key] == "I"){
        echo "$texte[$key]";
        $key++;
    }else {
        $key++;
    }

}

?>