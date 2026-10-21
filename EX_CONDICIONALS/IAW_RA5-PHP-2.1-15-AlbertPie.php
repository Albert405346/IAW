<?php
/* Per a comprovar els altres 3 resultats prossibles:
/ 1 - Canviem $placesDisponibles i assignem 0; resultat = Activitat completa.
/ 2 - Canviem $edat per un menor a 16; resultat = No compleixes l'edat mínima.
/ 3 - Canviem $esEstudiant = false; i mantenim els demés valors; resultat = Reserva possible / 30 €.
*/
const EDAT_MINIMA = 16; // Declarem les constants amb els requisits per a la resrva.
const PREU_BASE = 30;
const DESCOMPTE_ESTUDIANT = 20; 
$nom = "Clara"; // Declarem les variables amb les dades de l'usuari que reserva.
$edat = 16;
$esEstudiant = true;
$placesDisponibles = 3;

/* Funcionament; 
/ Primer if/elseif: comprovem si hi ha places disponibles i si té l'edat suficient.
/ Else y if/else niats: si es pot reservar, i si és estudiant es calcula el preu. Si no ho és, es paga el preu establert.
*/
if ($placesDisponibles <= 0) {
    $resultat = "Activitat completa.";
    $potReservar = false;
} elseif ($edat < EDAT_MINIMA) {
    $resultat = "No compleixes l'edat mínima.";
    $potReservar = false;
} else {
    $potReservar = true;

    if ($esEstudiant) {
        $preu = PREU_BASE * (1 - DESCOMPTE_ESTUDIANT / 100);
    } else {
        $preu = PREU_BASE;
    }
    $resultat = "Reserva possible.";
}

?>

<!--Creem una pàgina HTML per a mostrar informaciño en relació al usuari-->
<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Reserva</title>
    </head>
    <body>
        <h1>Resum de la seva reserva</h1>
        <p>Nom: <?php echo $nom; ?></p>
        <p>Edat: <?php echo $edat; ?></p>
        <p>Resultat: <?php echo $resultat; ?></p>

<!--Mostrem el preu només si es pot reservar-->
<!--La funció number_format mostra el import final amb dos decimals; ex: 50.00€-->
        <?php if ($potReservar) { ?> 
            <p>Preu final: <?php echo number_format($preu, 2); ?> €</p>
        <?php } ?> 

    </body>
</html>
