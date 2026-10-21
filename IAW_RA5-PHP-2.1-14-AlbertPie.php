<?php
/* Definim tres variables, les quals ens serviràn per a realitzar les operacions.
*/
$a = 50;
$b = 10; 
$operacio = "+";

/* Funcionament de switch:
/ Amb aquesta funció, comprovem el valor de la variable operació per a decidir quina ha d'executar. 
/ Definim els 4 tipus d'operació amb la funció case, s'executa el corresponent.
/ Amb el case per a la divisió, primer, es verifica si $b és zero, ja que no es pot dividir entre 0.
/ Si es dóna el cas en que $b és un zero, es mostrarà: 
*/
switch ($operacio) {
    case "+":
        echo "Resultat: " . ($a + $b);
        break; //Termina el cas executat per a evitar que es junti amb els demés.
    case "-":
        echo "Resultat: " . ($a - $b);
        break;
    case "*": 
        echo "Resultat: " . ($a * $b);
        break;
    case "/":
        if ($b == 0) {
            echo "No es pot dividir entre zero.";
        } else {
            echo "Resultat: " . ($a / $b);
        }
        break;

    default: //Si s'introdueix un simbol no vàlid, es mostrarà: 
        echo "Operació no vàlida.";
}
?> 
