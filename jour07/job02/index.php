<?php

$myBool = true;

function bonjour($jour){

    if ($jour == true){
        echo "Bonjour";
    }else{
        echo "Bonsoir";
    }
}

bonjour($myBool);

?>