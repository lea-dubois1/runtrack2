<!DOCTYPE html>

<html>

    <head> 
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="css/voyages.css">
        <title>PHP form</title>
    </head>

    <body>

        <form action="" method="get" class="formulaire">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">

            <input type="submit" value="Envoyer">
        </form>
    </body>

</html>

<?php

foreach ($_GET as $value){

    if ($value % 2 == 0){
        echo "Nombre pair";
    }else{
        echo "Nombre impair";
    }
}
?>