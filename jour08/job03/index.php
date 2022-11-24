<?php

session_start(); //démarrage de la session


if(isset($_POST['submit'])) { //si $_POST['submit'] existe rentre dans la condition 
    $_SESSION['user'][] = $_POST['prenom']; //$_POST['prenom'] est stocké dans un tableau dans la varibale $_SESSION['user']
}

if(isset($_POST['reset'])) { // si $_POST['reset'] existe rentre dans la condition
    unset($_SESSION['user']); //et unset $_['session user']
}

?>


<form method="POST" id="form">
    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom ">
    <input type="submit" name="submit" value="Envoyer">
    <input type="submit" name="reset" value="Reset">
</form>


<?php
if(isset($_SESSION['user'])) { //si $_SESSION['user'] existe rentre dans la conditions
    foreach($_SESSION['user'] as $values){ //pour chaque value dans $_SESSION['user']
        echo '<br>'. $values . '</br>'; //afficher values avec un saut de ligne
    }
}
?>