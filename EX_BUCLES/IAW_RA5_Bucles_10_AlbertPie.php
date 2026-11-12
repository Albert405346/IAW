<?php
const OBJECTIU = 120;
const APORTACIO = 25; 

$estalvi = 0;
$setmana = 0;

echo "<table border='1'>";
echo "<tr><th>Setmana</th><th>Estalvi acumulat (€)</th></tr>";

while ($estalvi < OBJECTIU) {
    $setmana++;
    $estalvi += APORTACIO;

    echo "<tr>";
    echo "<td>$setmana</td>";
    echo "<td>$estalvi €</td>";
    echo "</tr>";
}

echo "</table>";

echo "<p>Setmanes necessàries: $setmana</p>";
echo "<p>Total estalviat: $estalvi €</p>";
?>
