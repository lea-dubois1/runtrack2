<!DOCTYPE html>

<html>

    <head> 
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="css/voyages.css">
        <title>PHP form</title>
    </head>

    <body>

        <form action="" method="post" class="formulaire">

            <label for="prenom">Entrez votre prénom: </label>
            <input type="text" name="prenom" placeholder="Prénom" required>

            <label for="nom">Entrez votre nom: </label>
            <input type="text" name="nom" placeholder="Nom">

            <label for="age">Entrez votre age: </label>
            <input type="text" name="age" placeholder="Age">

            <input type="submit" value="Envoyer!">
        </form>
    </body>

</html>

<?php

    $nb = 0;

    foreach ($_POST as $value){
        if ($value !== ""){
            $nb++;
        }
    }

    echo 'Le nombre d\'argument GET envoyé est : '.$nb;

?>