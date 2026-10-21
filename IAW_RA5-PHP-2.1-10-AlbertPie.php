<?php
/* Declarem dues constants amb les edats a partir de les que no és paga:
/ Menys de 12 anys - no pagues. / Més de 65 anys - no pagues.
/ També, una variable amb l'edat de l'usuari.
*/
const EDAT_INFANTIL = 12;
const EDAT_SENIOR = 65;
const PREU_ENTRADA = 8; 
$edat = 80;

/* Funcionament:
/ Si es compleix alguna de les situacions esmentades, el preu serà 0.
/ Pel contrari, el preu serà el de l'entrada.
*/
if ($edat <= EDAT_INFANTIL || $edat >= EDAT_SENIOR) {
    $preu = 0;
} else {
    $preu = PREU_ENTRADA;
}

/* Mostrem l'edat i el preu corresponent a aquesta:
*/
echo "Edat: " . $edat . " anys<br>";
echo "Preu de l'entrada: " . $preu . " $";
?>
