<?php
$preus = [
    "Llibreta" => 3.50,
    "Boligraf" => 1.20,
    "Carpeta" => 2.80,
    "Regle" => 1.50
];

echo "<table border='1'>";
echo "<tr><th>Article</th><th>Preu</th></tr>";

foreach ($preus as $clau => $valor) {
    echo "<tr>";
    echo "<td>$clau</td>";
    echo "<td>$valor</td>";
    echo "</tr>";
}

$total = 0;

foreach ($preus as $valor) {
    $total += $valor;
}

echo "El total, comprant una unitat de cada article és: " . $total;

$comptador = 0;

foreach ($preus as $valor) {
    if ($valor >= 2) {
        $comptador++;
    }
}

echo "<p>El total d'articles amb preu igual o superior a 2 és: " . $comptador;
?>
