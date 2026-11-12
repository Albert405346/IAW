<?php
$nombres = [
    [2, 4, 6],
    [1, 3, 5],
    [7, 8, 9]
];

echo $nombres[0][1] . "<br>";
echo $nombres[1][2] . "<br>";
echo $nombres[1][1] = 30 . "<br>";
echo "El nombre de files és: ";
echo count($nombres) . "<br>";
echo "El nombre d'elements de la primera fila és: ";
echo count($nombres[0]) . "<br>";

echo "<table border='1'>";

foreach ($nombres as $fila) {
    echo "<tr>";

    foreach ($fila as $valor) {
        echo "<td>" . $valor . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?> 