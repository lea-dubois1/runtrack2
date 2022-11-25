<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT salles.nom, etage.nom FROM salles INNER JOIN etage WHERE salles.id_etage = etage.id");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Nom salle</th>
            <th>Nom étage</th>
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