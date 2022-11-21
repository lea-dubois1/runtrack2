<!DOCTYPE html>

<html>

    <head> 
        <meta charset="UTF-8">
        <title>PHP maison</title>
    </head>

    <body>

        <form action="" method="get" class="formulaire">

            <label for="hauteur">Hauteur: </label>
            <input type="text" name="hauteur" placeholder="Hauteur">

            <label for="largeur">Largeur: </label>
            <input type="text" name="largeur" placeholder="Largeur">

            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>

<pre>

    <?php

    if ($_GET["hauteur"] != "" && $_GET["largeur"] != "" ){

        for($i = 0; $i <= $_GET["hauteur"] - 1; $i++){      // TRIANGLE //

            if($i == 0){                            // Première ligne

                for($a = 0; $a <= $_GET["hauteur"] - 4; $a++){

                    echo '&nbsp';
                }

                echo '/' . '\\' . "<br>";
            }elseif($i <= $_GET["hauteur"]){                                  // Autres lignes

                for($b = 0; $b <= $_GET["hauteur"] - $i; $b++){

                    echo '&nbsp';
                }

                echo '/';

                for($c = 1; $c <= $i * 2; $c++){

                    echo '_';
                }

                echo '\\' . "<br>";
            }
        }

        for($i = 0; $i <= $_GET["hauteur"] - 1; $i++){      // RESTANGLE //

            for($b = 0; $b <= $_GET["largeur"] % 2 +1; $b++){

                echo '&nbsp';
            }

            if($i == $_GET["hauteur"] - 1){

                echo "|";
            
                for($e = 1; $e <= $_GET["largeur"] - 2; $e++){

                    echo '_';
                }

                echo "|" . "<br>";
            }else{

                echo "|";
            
                for($f = 1; $f <= $_GET["largeur"] - 2; $f++){

                    echo '&nbsp';
                }

                echo "|" . "<br>";
            }
        }

    }else{

        echo "Veuillez entrer une hauteur et une hauteur";
    }

    ?>
    
</pre>