<?php
$nombre = 8;

echo "<table border='1'>";
echo "<tr><th>Operación</th><th>Resultat</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;

    echo "<tr>";
    echo "<td>$nombre x $i</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";
}

echo "</table>";
?>
