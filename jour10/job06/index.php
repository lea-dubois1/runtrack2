<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$resultat = $mysqli -> query("SELECT COUNT(*) FROM etudiants");

$res = $resultat -> fetch_all();
var_dump($res);

?>


<table>

    <thead>

        <tr>
            <th>Nombre d'étudiants</th>
        </tr>
    </thead>

    <tbody>


        <?php

            echo "<tr><td>" . $res[0][0] . "</td></tr>";
        ?>
    </tbody>
</table>