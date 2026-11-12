<?php
const NOTA_APROVAT = 5;
$notes = [4, 7.5, 5, 3, 9, 6];

$aprovats = 0;
$suspesos = 0;

echo "<table border='1'>";
echo "<tr><th>Nota</th><th>Resultat</th></tr>";

foreach ($notes as $nota) {
    echo "<tr>";
    echo "<td>$nota</td>";

    if ($nota >= NOTA_APROVAT) {
        echo "<td>Aprovat</td>";
        $aprovats++;
    } else {
        echo "<td>Suspès</td>";
        $suspesos++;
    }

    echo "</tr>";
}

echo "</table>";

echo "<p>Total d'aprovats: $aprovats</p>";
echo "<p>Total de suspesos: $suspesos</p>";
?>
