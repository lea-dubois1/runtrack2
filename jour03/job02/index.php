<?php

$phrase = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

foreach ($phrase as $key => $value){

    if($key % 2 == 0){
        echo "$value";
    }else {
        break;
    }
}
?>