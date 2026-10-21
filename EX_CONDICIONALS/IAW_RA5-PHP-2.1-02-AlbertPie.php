<?php
// Definim una constant amb define, però, també ho podrim fer amb la funció const.
define("EDAT_MAJORIA",18);
$edat = 16;

/* Si 16 és més gran o igual a la constant 18, mostrarà:
*/
if ($edat >= EDAT_MAJORIA) {
    echo "Ets major d'edat.";
/* Pel contrari, és més petit, mostrarà:
*/
} else {
    echo "Ets menor d'edat.";
}
