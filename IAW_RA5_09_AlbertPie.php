<?php
/* Funcionamet general de la combinació:
/ Primer, definim tres variables amb PHP, després, amb HTML creem l'estructura bàsica de la pàgina.
/ Amb HTML també, creem una taula, on a la primera columna afegim el nom de les variables i a la segona el seu valor
*/
$nom = "Albert";
$edat = 18;
$ciutat = "Móra d'Ebre";
?>

<!--El següent codi (de l'exercici 9), combina HTML i PHP--> 
<!DOCTYPE html>
<html lang="ca"> 
    <head> 
        <meta charset="UTF-8">
        <title>Taula amb HTML/PHP</title>
    </head>
    <body>
<!--La etiqueta <table> amb l'atribut border permet crear una taula amb grossor igual a 1-->
        <table border="1"> 
<!--Les etiquetes <tr> i <td> creen files horitzontalment i cel·les de dades-->
            <tr> 
                <td>Nom</td>
                <td><?php echo $nom; ?></td>
            </tr>
            <tr>
                <td>Edat</td>
                <td><?php echo $edat; ?></td>
            </tr>
            <tr>
                <td>Ciutat</td>
                <td><?php echo $ciutat; ?></td>
            </tr>
        </table>
    </body>
</html>
