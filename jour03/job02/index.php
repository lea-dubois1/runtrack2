<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$key = 0;

while (isset($str[$key]) === true){

    if($key % 2 == 0){
        echo "$str[$key]";
        $key++;
    }else {
        $key++;
    }

}

?>