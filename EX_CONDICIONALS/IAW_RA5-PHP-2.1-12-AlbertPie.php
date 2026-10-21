<?php
/* Declarem dos constants amb els diners mínims per a que l'enviament sigui gratuit i els cos de l'enviament.
/ També, dos variables per a saber el import de l'usuari i si és soci.
*/
const MINIM_ENVIAMENT_GRATUIT = 60;
const COST_ENVIAMENT = 5;
$importCompra = 40;
$esSoci = true;

/* Funcionament:
/ Si el import supera el mínim = enviament 0, 
/ Si és soci = enviament a meitat de preu,
/ Si no és soci i no supera el mínim, pagarà el preu establert.
*/
if ($importCompra >= MINIM_ENVIAMENT_GRATUIT) {
    $enviament = 0;
} elseif ($esSoci) {
    $enviament = COST_ENVIAMENT / 2;
} else {
    $enviament = COST_ENVIAMENT;
} 

$totalImport = $importCompra + $enviament; // Calculem el total.

// Mostrem les dades de al usuari:
// El següent number_format serveix per a mostrar les dades numériques amb 2 decimals, amb una coma com al seu saparador, i sense separador de mil·lers.
echo "Import de la compra: " . number_format($importCompra, 2, ',', '') . " $<br>";
echo "Despeses d'enviament: " . number_format($enviament, 2, ',', '') . " $<br>";
echo "Total final: " . number_format($totalImport, 2, ',', '') . " $";
?> 
