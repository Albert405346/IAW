<?php
/* Declarem dos constants amb l'import mínim i el descompte.
/ També, una variable amb l'import real de la compra.
*/
const IMPORT_MINIM = 100;
const PERCENTATGE_DESCOMPTE = 10; 
$import_compra = 200; // Ha de ser una xifra no negativa.

/* Funcionament:
/ Si l'import real és major o igual a l'import mínim s'aplica el percentatge.
/ També, calculem l'import final descomtant el descompte a l'import real.
/ Aquí, inicialitzem la varaible a 0 abans del if. Així: si és inferior a 100, no s'apliquen descomptes
*/

$descompte = 0;

if ($import_compra >= IMPORT_MINIM) {
    $descompte = $import_compra * PERCENTATGE_DESCOMPTE / 100;
}

$import_final = $import_compra - $descompte;

/* Mostrem l'import original, amb el descompte i el final:
*/
echo "Import original: " . $import_compra . " $<br>";
echo "Import del descompte: " . $descompte . " $<br>";
echo "Import final: " . $import_final . "$<br>";
?>
