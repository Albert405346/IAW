<?php
/* Declarem dos constants amb els limits de temperatura.
/ També, una variable amb la temepratura actual.
*/
const LIMIT_FRED = 15;
const LIMIT_CALOR = 25;
$temperatura = 10;

/* Funcionament:
/ Si la temperatura és menor al limit de temperatura baixa, es mostrarà:
/ Si está entre els valors definits, es mostrarà:
/ Pel contrari, si és alta, es mostrarà:
*/
if ($temperatura < LIMIT_FRED) {
    echo "Fa fred.";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "La temepratura és agradable.";
} else {
    echo "Fa calor.";
}
?>
