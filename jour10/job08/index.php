<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT SUM(capacite) FROM salles");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Capacité totale</th>
        </tr>
    </thead>

    <tbody>


        <?php

            echo "<tr><td>" . $res[0][0] . "</td></tr>";
        ?>
    </tbody>
</table>