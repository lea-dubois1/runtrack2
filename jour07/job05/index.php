<?php

$phrase = "Ceci est une longue phrase";
$lettre = "e";

function occurences($str, $char){

    $nbChar = 0;

    for ($i=0; isset($str[$i]) ; $i++) { 

        if ($str[$i] === $char) {

            $nbChar++;
        }
    }

    return $nbChar;
}

$nb = occurences($phrase, $lettre);
echo 'Il y a ' . $nb . ' fois la lettre \'' . $lettre . '\' dans la phrase "' . $phrase . '"'

?>