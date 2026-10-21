<?php
/* Funcionament del següent bloc de codi: 
/ El que fa: mostrar la data i l'hora actual.
/ Com: fent servir la funció date, amb l'estructura ("d/m/Y"), que vol dir dia, mes i any. 
/ El paràmetre "<br>" afegeix un salt de linea al navegador.
*/
echo "Avui és: ";
echo date("d/m/Y");
echo "<br>";
/* Aquest altre bloc de codi mostra:
/ ("H:i"), que vol dir hora i minuts.
*/
echo "I són les: ";
echo date("H:i");
?>
