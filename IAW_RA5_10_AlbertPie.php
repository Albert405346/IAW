<?php
/* Funcionament general de la combinació:
/ Amb PHP, definim tres variables i amb HTML creem l'estructura de la pàgina.
*/
$nom = "Albert";
// Amb aquesta variable, he optat per a afegir la imatge amb una URL.
$imatge = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwBzpN4elNF5lnZPfKL6lezDwb8LeTQQqvDyzjPubcHi71Site5hRvQT0&s=10";
?>

<!--El següent codi (de l'exercici 10), combina HTML i PHP-->
<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
<!--Aquesta etiqueta dins de <head> mostra un títol a la pestanya del navegador, no a la pàgina-->
        <title>La meva targeta</title>
    </head>
    <body>
<!--L'etiqueta <center> permet centrar en mig al nevegador el contingut a mostrar-->
<!--Aquí, el que fem és mostrar el valor de les variables PHP combinant-les amb missatges HTML--> 
        <center>
            <h1>Hola, sóc <?php echo $nom; ?>!</h1>
            <img src="<?php echo $imatge; ?>" width="200" alt="La meva imatge">
            <p>Data actual: <?php echo date("d/m/Y"); ?></p>
            <p>Benvingut a la meva targeta personal!</p>
        <center>    
    </body>
</html>
