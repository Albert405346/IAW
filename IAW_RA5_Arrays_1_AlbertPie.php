<?php
$ciutats = ["Tarragona", "Reus", "Tortosa", "Lleida"];

echo $ciutats[0] . "<br>";
echo $ciutats[3] . "<br>";

echo ("El nombre total de ciutats és: ");
echo count($ciutats);

echo '<ul>';
foreach ($ciutats as $clau => $valor) {
    echo '<li>' . $valor . '</li>' . "<br>";
}

echo '<ul>';
?>
