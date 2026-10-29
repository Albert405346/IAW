<?php
const LIMIT = 10; 

$suma = 0;

for ($i = 1; $i <= LIMIT; $i++) {
    $suma += $i;
}

echo "<p>La suma dels nombres de l'1 al " . LIMIT . " és " . $suma . ".</p>";
?>