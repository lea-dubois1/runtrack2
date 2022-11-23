<!DOCTYPE html>

<html>

    <head> 
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/voyages.css">
        <title>PHP form</title>
    </head>

    <body>

        <form action="" method="post" class="formulaire">

            <label for="str">Veuillez entrer un texte: </label>
            <input type="text" name="str" id="str"><br>

            <label for="fonction">Choisissez la transformation de texte:</label>
            <select name="fonction" id="fonction">
                <option value="">--Veuillez choisir une option--</option>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
            </select><br>

            <input type="button" value="Envoyer"><br><br>
        </form>
    </body>

</html>


<?php

var_dump($_POST);

function gras($str){

    $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $a = 0;
    $mots = "";

    for ($i=0; isset($str[$i]) ; $i++) { 
        
        while ($str[$i] != "") {

            $mots[$a] = $mots[$a] . $str[$i];
        }

        $a++;
        var_dump($mots);
    }
}



?>