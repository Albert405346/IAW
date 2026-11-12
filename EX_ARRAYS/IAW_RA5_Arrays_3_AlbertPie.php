<?php
$colors = ["Verd", "Blau", "Blanc", "Negre"];

unset($colors[1]);

echo "<table border='1'>";
echo "<tr><th>Clau</th><th>Color</th></tr>";

foreach ($colors as $clau => $valor) {
    echo "<tr>";
    echo "<td>$clau</td>";
    echo "<td>$valor</td>";
    echo "</tr>";
}

$colors = array_values($colors);

echo "<table border='1'>";
echo "<tr><th>Clau</th><th>Color</th></tr>";

foreach ($colors as $clau => $valor) {
    echo "<tr>";
    echo "<td>$clau</td>";
    echo "<td>$valor</td>";
    echo "</tr>";
}

?>
