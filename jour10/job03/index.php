<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
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