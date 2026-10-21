<?php
// Definim una variable amb un nombre enter i el dividim per a saber el seu residu.
$nombre = 20;
$residu = $nombre % 2;

/* Si és igual a 0, mostrarà:
*/
if ($residu == 0) {
    echo "El nombre és parell.";
/* Pel contrari, si no ho és, mostrarà:
*/
} else {
    echo "El nombre és senar.";
}
