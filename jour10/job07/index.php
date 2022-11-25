<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT SUM(superficie) FROM etage");

$res = $resultat -> fetch_all();

?>


<table>

    <thead>

        <tr>
            <th>Superficie totale</th>
        </tr>
    </thead>

    <tbody>


        <?php

            echo "<tr><td>" . $res[0][0] . "</td></tr>";
        ?>
    </tbody>
</table>