<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT * FROM etudiants WHERE prenom LIKE 'T%'");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>


        <?php

            foreach ($res as $key => $value){
                echo "<tr>";
                foreach ($value as $cle => $valeur) {
                    echo "<td>$valeur</td>";
                }
                echo "</tr>";
            }

        ?>
    </tbody>
</table>