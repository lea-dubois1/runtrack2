<?php

$str = "Les choses que l'on possede finissent par nous posseder";

for ($i=-1; isset($str[$i]); $i--){    //quand la key = moins de zéro, elle recommence à la fin
    echo $str[$i];
}

?>