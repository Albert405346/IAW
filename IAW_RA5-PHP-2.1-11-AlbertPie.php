<?php
$nota = 9.5; // Variable amb la nota real. Entera o decimal.

/* Funcionament: 
/ Primer, comprovem si està entre 0 i 10 per a mostrar:
/ Després, segons el rang al que estigui, es mostrarà:
*/
if ($nota < 0 || $nota > 10) {
    echo "No és vàlida.";
} elseif ($nota < 5) {
    echo "Suspés.";
} elseif ($nota < 6) {
    echo "Aprovat.";
} elseif ($nota < 7) {
    echo "Bé.";
} elseif ($nota < 9) {
    echo "Notable.";
} else {
    echo "Excel·lent.";
}
?>
