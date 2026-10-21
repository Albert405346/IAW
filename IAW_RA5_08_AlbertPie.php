<?php
/* Funcionament general: 
/ Aquest codi definiex dos variables númeriques enteres, es mostra el seu valor i s'intarcanvia posteriorment.
*/
/*Funcionament de la primera part del codi:
/ Es defineixen dos varaibles i es mostra el valor de cada una amb var_dump i salts de pàgina.
*/
$número_1 = 20;
$número_2 = 40;
echo "Valor inicial del número 1: ";
var_dump($número_1);
echo "<br>";
echo "Valor inicial del número 2: ";
var_dump($número_2);
echo "<br>";
/* Funcionament de la segona part del codi:
/ Aquí, es defineixen tres variables, perquè?:
/ Si fem $a = $b i a l'inversa, es perd el valor d'$a, ja que, les dues ja tenen el corresponent al de $b, per tant:
/ Definim una variable $temporal per a emmagatzemar el valor d'$a abans de sobreescriure'l.
/ Després, el tornem a mostrar amb salts de pàgina.
*/
$temporal = $número_1;
$número_1 = $número_2;
$número_2 = $temporal;
echo "Valor intercanviat del número 1: ";
var_dump($número_1);
echo "<br>";
echo "Valor intercanviat del número 2: "; 
var_dump($número_2);
?>
