<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT * FROM salles ORDER BY capacite");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Nom</th>
            <th>Etage</th>
            <th>Capacité</th>
        </tr>
    </thead>

    <tbody>


        <?php

            foreach ($res as $key => $value){
                echo "<tr>";
                foreach ($value as $cle => $valeur) {
                    if ($cle == 0){
                        continue;
                    }
                    echo "<td>$valeur</td>";
                }
                echo "</tr>";
            }

        ?>
    </tbody>
</table>