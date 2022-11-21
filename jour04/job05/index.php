<!DOCTYPE html>

<html>

    <head> 
        <meta charset="UTF-8">
        <title>PHP form</title>
    </head>

    <body>

        <form action="" method="post" class="formulaire">
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Username">

            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Password">

            <input type="submit" value="Connection">
        </form>
    </body>

</html>

<?php

var_dump($_POST);

if ($_POST["username"] === "John" && $_POST["password"] === "Rambo"){
    echo "C'est pas ma guerre";
}else{
    echo "Votre pire cauchemar";
}

?>