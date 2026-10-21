<?php
$a = 16;
$b = 18;

/* Si 16 és més gran que 18, mostrarà:
*/
if ($a > $b) {
    echo "El primer nombre és més gran.";
/* Si és el contrari, mostrarà:
*/
} elseif ($b > $a) {
    echo "El segon nombre és més gran.";
/* Però, si les dues constants són iguals, mostrarà:
*/
} else {
    echo "Els dos nombres són iguals.";
}
