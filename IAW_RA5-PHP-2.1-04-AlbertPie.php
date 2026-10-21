<?php
define("NOTA_APROVAT",5);
$nota = 8;

/* Si 8 és més gran o igual a 5, aprovarà. Mostrarà:
*/
if ($nota >= 5) {
    echo "La teva nota és " . $nota . ". Has aprovat.";
/* Pel contrari, si la constant és més petita, suspendrà. Mostrarà:
*/
} else {
    echo "Has suspés.";
}
