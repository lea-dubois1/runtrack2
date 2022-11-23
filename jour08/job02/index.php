<?php

session_start();

if (session_start() !== null){

    $nb++;
}

setcookie('nbvisites', $nb, time()+3600);

echo $_COOKIE['nbvisites'];

session_destroy();

?>