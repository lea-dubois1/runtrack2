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
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>

            <label for="email">Entrez votre nom: </label>
            <input type="text" name="nom" id="nom" placeholder="Nom">

            <label for="email">Entrez votre age: </label>
            <input type="text" name="age" id="age" placeholder="Age">

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