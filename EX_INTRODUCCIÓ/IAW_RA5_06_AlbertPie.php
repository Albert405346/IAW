<!--El següent codi (de l'exercici 6), combina HTML i PHP-->
<!--Amb HTML, hem creat una estructura bàsica, on a la pàgina web es mostrarà el missatge entre <h1>--> 
<!DOCTYPE html>
<html lang="ca">
    <head> 
        <meta charset="UTF-8">
    </head>
    <body> 
        <h1>Pàgina que combina HTML i PHP</h1>
<?php
// Quant a PHP, dins la pròpia pàgina HTML, hem afegit un comentari PHP.

/* Funcionament de la combinació HTML/PHP: 
/ Amb HTML es crea l'estructura bàsica, i dins <body> s'ha d'introduïr obligatoriament el contingut PHP, aquest no pot estar fora.
*/
echo "<p>Hola! Aquesta és una pàgina web d'exemple, que combina estructura HTML i un missatge PHP.</p>";
?>
    </body>
</html>
