<?php

$num1 = 10;
$op = "/";
$num2 = 2;


function calcule($a, $operation, $b){
    
    switch ($operation) {
        case '+':
            $resultat = $a + $b;
            break;
        case '-':
            $resultat = $a - $b;
            break;
        case '*':
            $resultat = $a * $b;
            break;
        case '/':
            $resultat = $a / $b;
            break;
    }

    return $resultat;
}

$result = calcule($num1, $op, $num2);
echo $result;

?>