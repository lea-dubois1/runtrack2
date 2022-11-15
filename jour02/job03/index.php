<?php

$nb = 0;

while($nb < 100){
    if($nb === 42){
        echo "LaPlateforme_<br>";
        $nb++;
    }else if($nb <= 20) {
        echo "<i>$nb</i><br>";
        $nb++;
    }else if ($nb >= 25 && $nb <= 50){
        echo "<u>$nb</u><br>";
        $nb++;
    }else {
        echo "$nb<br>";
        $nb++;
    }
}

?>