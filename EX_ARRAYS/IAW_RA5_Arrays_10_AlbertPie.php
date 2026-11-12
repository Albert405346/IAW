
<?php

$grup = [
    ["nom" => "Mar", "notes" => [6, 8, 7]],
    ["nom" => "Pol", "notes" => [4, 5, 3]],
    ["nom" => "Aina", "notes" => [9, 8, 10]],
    ["nom" => "Joan", "notes" => []]
];

const NOTA_APROVAT = 5;

foreach ($grup as $alumne) {

    echo "<h2>" . $alumne["nom"] . "</h2>";

    if (empty($alumne["notes"])) {
        echo "<p>Sense notes</p>";
    } else {

        $suma = 0;

        echo "<ul>";

        foreach ($alumne["notes"] as $nota) {
            echo "<li>" . $nota . "</li>";

            $suma += $nota;
        }

        echo "</ul>";

        $mitjana = $suma / count($alumne["notes"]);

        echo "<p>Mitjana: " . $mitjana . "</p>";

        if ($mitjana >= NOTA_APROVAT) {
            echo "<p>Aprovat</p>";
        } else {
            echo "<p>Suspès</p>";
        }
    }
}
?>
