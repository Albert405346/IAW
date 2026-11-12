
<?php

const NOTA_APROVAT = 5;

$alumnes = [
    ["nom" => "Mar", "nota" => 7],
    ["nom" => "Pol", "nota" => 4],
    ["nom" => "Aina", "nota" => 9],
    ["nom" => "Nil", "nota" => 5]
];

$sumaNotes = 0;
$aprovats = 0;
$suspesos = 0;

if (count($alumnes) > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Nota</th><th>Resultat</th></tr>";

    foreach ($alumnes as $alumne) {

        echo "<tr>";

        echo "<td>" . $alumne["nom"] . "</td>";
        echo "<td>" . $alumne["nota"] . "</td>";

        $sumaNotes += $alumne["nota"];

        if ($alumne["nota"] >= NOTA_APROVAT) {
            echo "<td>Aprovat</td>";
            $aprovats++;
        } else {
            echo "<td>Suspès</td>";
            $suspesos++;
        }

        echo "</tr>";
    }

    echo "</table>";

    $mitjana = $sumaNotes / count($alumnes);

    echo "<p>Mitjana: " . $mitjana . "</p>";

    echo "<p>Aprovats: " . $aprovats . "</p>";
    echo "<p>Suspesos: " . $suspesos . "</p>";

} else {
    echo "No hi ha alumnes";
}

?>
