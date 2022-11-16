<?php

$texte = "I'm sorry Dave I'm afraid I can't do that";
$key = 0;
$voyelles = "aeiouyI";
$keyV = 0;

while (isset($texte[$key]) === true){

    if (isset($voyelles[$keyV]) === true){

        if($texte[$key] === $voyelles[$keyV]){
            echo "$texte[$key]";
            $key++;
        }else {
            $key++;
        }
    }

}

?>
