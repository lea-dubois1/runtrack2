<?php

for($i = 0; $i <=1000; $i++){

    $x = 0;
    
    for ($j = 2; $j <= $i/2; $j++){
        if($i % $j == 0){
            $x++;    // Ici $x == 1 alors le nombre n'est pas un nombre premier
            break;   // Avec break on reviens a la boucle d'avant où $x == 0
        }
    }
    
    if( $x == 0 && $i != 1 ){    // si $x == 0 alors c'est que le nombre est un nb premier
        echo "$i<br>";
    }
}
?>