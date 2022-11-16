<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$key = 0;

while (isset($str[$key]) === true){

    if($str[$key] == "a" || $str[$key] == "e" || $str[$key] == "i" || $str[$key] == "o" || $str[$key] == "u" || $str[$key] == "y" || $str[$key] == "I"){
        echo "$str[$key]";
        $key++;
    }else {
        $key++;
    }

}

?>