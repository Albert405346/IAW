<?php
$repeticions = 4;
$i = 1;

do {
    echo "<p>Volta $i</p>";
    $i++;
} while ($i <= $repeticions);

/* Apareix només una repetició en canviar el valor de la variable a 0, per què: 
Hem establert que do executi el bloc una primera vegada abans de entrar a while i comprovar la condició.
*/
?>


<?php
$repeticions = 0;
$i = 1;


while ($i <= $repeticions) {
    echo "<p>Volta $i</p>";
    $i++;
}
/* Amb while sense do, no apareix cap volta ja que aquest si comprova la condició abans d'executar el bucle.
Si en aquest segon codi canviem el valor de la variable a 4, apareixerien 8 voltes, de l'1 al 4 i de l'1 al 4.
*/
?>
