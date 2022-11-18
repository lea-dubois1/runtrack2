<!DOCTYPE html>

<html>

    <head> 
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="css/voyages.css">
        <title>PHP form</title>
    </head>

    <body>

        <form action="" method="get" class="formulaire">

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

    $arg = 0;
    $val = 0;

    foreach ($_GET as $key => $value){
        $argument[$arg] = $key;
        $valeur[$val] = $value;

        $arg++;
        $val++;
    }

    echo "
    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>$argument[0]</td>
                <td>$valeur[0]</td>
            </tr>
            <tr>
                <td>$argument[1]</td>
                <td>$valeur[1]</td>
            </tr>
            <tr>
                <td>$argument[2]</td>
                <td>$valeur[2]</td>
            </tr>
        </tbody>
    </table>"

?>