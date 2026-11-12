<?php
$materials = ["Llapis", "Paper", "Goma"];

echo '<ul>';
foreach ($materials as $clau => $valor) {
    echo '<li>' . $valor . '</li>' . "<br>";
}

$materials[1] = "Carpeta";
$materials[] = "Regla";

echo '<ul>';
foreach ($materials as $clau => $valor) {
    echo '<li>' . $valor . '</li>' . "<br>";
}

echo("Els nombre de materials a la nova llista és: ");
echo count($materials);

?>
