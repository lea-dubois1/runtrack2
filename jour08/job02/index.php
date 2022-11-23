<?php

    $total_count = 0;

    if(isset($_COOKIE['nbvisites'])){
        $total_count = $_COOKIE['nbvisites'];
        $total_count++;
    }

    setcookie('nbvisites', $total_count)
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
                $_COOKIE['nbvisites'] = 1;
                $total_count = 1;
                setcookie('nbvisites', $total_count);
            }

            echo $_COOKIE['nbvisites'] . " visites";

            var_dump($_COOKIE['nbvisites']);
            var_dump($total_count);
        ?>

        <form action="" method="post">
            <input type="submit" name="reset" value="Reset">
        </form>
    </body>
</html>