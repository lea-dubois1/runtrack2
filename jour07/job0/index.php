<?php

$phrase = "Ceci est Une phrase avec des Majuscules";

var_dump($_POST);

function gras($str){

    $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $a = 0;
    $mots = "";
    $mot = "";

    for ($i=0; isset($str[$i]) ; $i++) { 

        if ($str[$i] === " "){

            $mot = "";
            $a++;
        }elseif ($str[$i] != " "){

            $mot = $mot . $str[$i];
        }

        $mots[$a] = $mot;

        var_dump($mots);
    }
}

$majStr = gras($phrase);
echo $majStr;

?>