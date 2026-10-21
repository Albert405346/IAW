<?php
/* Declarem dues constant amb les credencials correctes.
/ També, definim dos variables amb credencials, que poden ser les correctes o no.
*/
const USUARI_CORRECTE = "alumne";
const CONTRASENYA_CORRECTA = "php123";
$usuari = "Albert";
$contrasenya = "python123";

/* Funcionament:
/ Si les credencials són les correctes, mostrarà: 
/ Pel contrari, si són diferents, mostrarà:
*/
if ($usuari === USUARI_CORRECTE && $contrasenya === CONTRASENYA_CORRECTA) {
    echo "Accés permès.";
} else {
    echo "Accés denegat.";
}
?> 
