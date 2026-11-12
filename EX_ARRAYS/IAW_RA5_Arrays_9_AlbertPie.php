<?php
$productes = [
    "P01" => ["nom" => "Teclat", "preu" => 25, "estoc" => 4],
    "P02" => ["nom" => "Ratolí", "preu" => 12, "estoc" => 0],
    "P03" => ["nom" => "Monitor", "preu" => 150, "estoc" => 2],
    "P04" => ["nom" => "Cable", "preu" => 8, "estoc" => 5]
];

echo $productes["P02"]["nom"] . "<br>";
echo $productes["P02"]["preu"] . "<br>";
echo $productes["P02"]["estoc"] = 3;

$totalInventari = 0;

echo "<table border='1'>";
echo "<tr>
        <th>Codi</th>
        <th>Nom</th>
        <th>Preu (€)</th>
        <th>Estoc</th>
        <th>Valor de l'estoc (€)</th>
      </tr>";

foreach ($productes as $codi => $valor) {

    $valorEstoc = $valor["preu"] * $valor["estoc"];

    $totalInventari += $valorEstoc;

    echo "<tr>";
    echo "<td>$codi</td>";
    echo "<td>" . $valor["nom"] . "</td>";
    echo "<td>" . $valor["preu"] . "</td>";
    echo "<td>" . $valor["estoc"] . "</td>";
    echo "<td>$valorEstoc</td>";
    echo "</tr>";
}

echo "</table>";

echo "<p>Valor total de l'inventari: $totalInventari €</p>";

?> 
