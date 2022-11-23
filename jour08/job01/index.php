<?php

session_start();

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
}else{
    $_SESSION['nbvisites'] = 1;
}

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP session</title>
    </head>

    <body>
        <h1>Nombre de visites sur le page</h1>

        <?php

            if(isset($_POST['reset'])){
                $_SESSION['nbvisites'] = 1;
            }

            echo $_SESSION['nbvisites'] . " visites";
        ?>

        <form action="" method="post">
            <input type="submit" name="reset" value="Reset">
        </form>
    </body>
</html>