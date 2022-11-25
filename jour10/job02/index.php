<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT nom, capacite FROM salles");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Nom</th>
            <th>Capacité</th>
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