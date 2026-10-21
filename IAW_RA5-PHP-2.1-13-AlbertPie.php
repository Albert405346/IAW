<?php
/* Delcarem dos constants amb les edats amb les que es pot participar.
/ També, dos variables amb les dades d'un usuari que vol participar.
*/
const EDAT_MINIMA = 14;
const EDAT_MAJORIA = 18;
$edat = 16;
$teAutoritzacio = TRUE;

/* Funcionament: 
/ Mitjançant els condicionals niat (if, else if i else que es trobem dins d'altres condicionals): 
/ Es calcularà si l'usuari podrà participar segons la seva edat, i si té autorització per a fer-ho.
*/
if ($edat < EDAT_MINIMA) {
    echo "No pot participar perquè té menys de 14 anys.";
} else {
    if ($edat >= EDAT_MAJORIA) {
        echo "Pot participar perquè té 18 anys o més.";
    } else {
        if ($teAutoritzacio) {
            echo "Pot participar perquè té autorització.";
        } else {
            echo "No pot participar perquè és menor d'edat i no té autorització.";
        }
    }
}
?>
