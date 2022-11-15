<?php

$myBool = true;
$myInt = 103;
$myString = "Hello world!";
$myFloat = 4.7;

echo "
<table>
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>boolean</th>
            <td>myBool</td>
            <td>$myBool</td>
        </tr>
        <tr>
            <th>entier</th>
            <td>myInt</td>
            <td>$myInt</td>
        </tr>
        <tr>
            <th>chaîne de caractères</th>
            <td>myString</td>
            <td>$myString</td>
        </tr>
        <tr>
            <th>nombre à virgule flotante</th>
            <td>myFloat</td>
            <td>$myFloat</td>
        </tr>
    </tbody>
</table> "
?>