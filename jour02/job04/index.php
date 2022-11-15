<?php

$nb = 1;

while($nb < 100){
    if($nb % 3 == 0 && $nb % 5 == 0){
        echo "FizzBuzz<br>";
        $nb++;
    }else if($nb % 3 == 0) {
        echo "Fizz<br>";
        $nb++;
    }else if ($nb % 5 == 0){
        echo "Buzz<br>";
        $nb++;
    }else {
        echo "$nb<br>";
        $nb++;
    }
}

?>