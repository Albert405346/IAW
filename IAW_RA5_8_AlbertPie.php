<?php
$número_1 = 20;
$número_2 = 40;
echo "Valor inicial del número 1: ";
var_dump($número_1);
echo "<br>";
echo "Valor inicial del número 2: ";
var_dump($número_2);
echo "<br>";
$temporal = $número_1;
$número_1 = $número_2;
$número_2 = $temporal;
echo "Valor intercanviat del número 1: ";
var_dump($número_1);
echo "<br>";
echo "Valor intercanviat del número 2: "; 
var_dump($número_2);
?>
