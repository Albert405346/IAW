<?php
$alumne = [
    "nom" => "Mar",
    "edat" => 19,
    "grup" => "ASIX",
    "nota" => 6.5
];
?>

<h2><?= $alumne["nom"] ?></h2>

<?php
echo $alumne["edat"] . "<br>";
echo $alumne["grup"] . "<br>";
echo $alumne["nota"] . "<br>";

$alumne["nota"] = 8;
$alumne["ciutat"] = "Tarragona";

echo "<table border='1'>";
echo "<tr><th>Clau</th><th>Dada</th></tr>";

foreach ($alumne as $clau => $valor) {
    echo "<tr>";
    echo "<td>$clau</td>";
    echo "<td>$valor</td>";
    echo "</tr>";
};
