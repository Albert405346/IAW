<?php
require_once __DIR__ . "/funcions.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pràctica de funcions</title>
</head>
<body>
    <h1>Pràctica de funcions</h1>
    <h2>Exercici 1</h2>
    <h3>Salutació personalitzada</h3>
    <?php
    // Cridar i presentar els resultats.
    echo "<p>" . crearSalutacio("Laia") . "</p>";
    echo "<p>" . crearSalutacio("Pol") . "</p>";
    ?>
    <h2>Exercici 2</h2>
    <h3>Import d'una compra</h3>
    <?php
    $importNumero1 = calculaImport(20, 2);
    echo "<p>" . calculaImport(20, 2) . "</p>";
    echo "<p>" . calculaImport(50, 5) . "</p>";
    ?>
    <h2>Exercici 3</h2>
    <h3>Descompte opcional</h3>
    <!--La diferència entre ometre el segon argument i passar-hi un 0 és que, si l'ometem no es duurà a terme la
    funció, per tant, tindrem un error. Si hi passem un 0, es duurà a terme, però, el resultat serà el amteix-->
    <table border="1">
        <tr>
            <th>Import original</th>
            <th>Descompte</th>
            <th>Import final</th>
        </tr>
        <tr>
            <td>250 €</td>
            <td>30 %</td>
            <td><?php echo aplicarDescompte(250, 30); ?> €</td>
        </tr>
        <tr>
            <td>50 €</td>
            <td>5 %</td>
            <td><?php echo aplicarDescompte(50, 5); ?> €</td>
        </tr>
            <td>100 €</td>
            <td>25 %</td>
            <td><?php echo aplicarDescompte(100, 25); ?> €</td>
        </tr>
    </table>
    <h2>Exercici 4</h2>
    <h3>Qualificació d'una nota</h3>
    <?php
    $notesProva = [-1, 4.5, 5, 8, 11];
    ?>
    <table border="1">
        <tr>
            <th>Nota</th>
            <th>Qualificació</th>
        </tr>
        <?php
        foreach ($notesProva as $nota) {
        ?>
        <tr>
            <td><?php echo $nota; ?></td>
            <td><?php echo obtenirQualifiaccio($nota); ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <h2>Exercici 5</h2>
    <h3>Comprovar les places</h3>
    <?php
    $proves = [
        [5, 3],
        [5, 5],
        [5, 6],
        [0, 1],
        [5, 0]
    ];

    echo "<table border='1'>";
    echo "<tr>
        <th>Places disponibles</th>
        <th>Places sollicitades</th>
        <th>Resultat</th>
      </tr>";

    foreach ($proves as $prova) {
    $disponibles = $prova[0];
    $sollicitades = $prova[1];

    if (hiHaPlaces($disponibles, $sollicitades)) {
        $resultat = "Reserva possible";
    } else {
        $resultat = "Reserva no possible";
    }

    echo "<tr>";
    echo "<td>$disponibles</td>";
    echo "<td>$sollicitades</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";
    }

    echo "</table>";
    ?>
    <h2>Exercici 6</h2>
    <h3>Suma d'un interval</h3>
    <?php
    echo "<p>Resultat: " . sumarFins(50) . "</p>";
    echo "<p>Resultat: " . sumarFins(20) . "</p>";
    echo "<p>Resultat: " . sumarFins(0) . "</p>";
    ?>
    <h2>Exercici 7</h2>
    <h3>Mitjana d'una llista de notes</h3>
    <?php
    $resultat1 = calcularMitjana([6, 8, 7]);
    $resultat2 = calcularMitjana([7, 4]);
    $resultat3 = calcularMitjana([]);
    
    if ($resultat1 === null) {
        echo "<p>No hi ha notes</p>";
    }
    else {
        echo "<p>Mitjana: $resultat1</p>";
    }

    if ($resultat2 === null) {
        echo "<p>No hi ha notes</p>";
    }
    else {
        echo "<p>Mitjana: $resultat2</p>";
    }

    if ($resultat3 === null) {
        echo "<p>No hi ha notes</p>";
    }
    else {
        echo "<p>Mitjana: $resultat3</p>";
    }
    ?>
    <h2>Exercici 8</h2>
    <h3>Obtenir els nombres parells</h3>
    
    <?php

    $nombres1 = [3, 8, 5, 2, 10, 7];
    $nombres2 = [1, 3, 5];
    $nombres3 = [];

    $proves = [$nombres1, $nombres2, $nombres3];

    foreach ($proves as $nombres) {

        $parells = obtenirParells($nombres);

        echo "<h3>Nombres originals:</h3>";
        echo "<ul>";

        foreach ($nombres as $nombre) {
            echo "<li>$nombre</li>";
        }

        echo "</ul>";

        echo "<h3>Nombres parells:</h3>";

        if (empty($parells)) {

            echo "<p>No hi ha nombres parells</p>";

        } else {

            echo "<ul>";

            foreach ($parells as $nombre) {
                echo "<li>$nombre</li>";
            }

            echo "</ul>";
        }
    }
    ?>
    <h2>Exercici 9</h2>
    <h3>Resum d'un grup</h3>
    
    <?php

    $alumnes = [
        ["nom" => "Laia", "nota" => 7],
        ["nom" => "Pol", "nota" => 4],
        ["nom" => "Aina", "nota" => 9],
        ["nom" => "Nil", "nota" => 5]
    ];

    $resum = resumirGrup($alumnes);

    $grupBuit = [];
    $resumBuit = resumirGrup($grupBuit);

    ?>

    <h2>Grup inicial</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Camp</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>Total</td>
            <td><?= $resum["total"] ?></td>
        </tr>
        <tr>
            <td>Aprovats</td>
            <td><?= $resum["aprovats"] ?></td>
        </tr>
        <tr>
            <td>Suspesos</td>
            <td><?= $resum["suspesos"] ?></td>
        </tr>
        <tr>
            <td>Mitjana</td>
            <td>
                <?= $resum["mitjana"] ?? "Sense dades" ?>
            </td>
        </tr>
    </table>


    <h2>Grup buit</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Camp</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>Total</td>
            <td><?= $resumBuit["total"] ?></td>
        </tr>
        <tr>
            <td>Aprovats</td>
            <td><?= $resumBuit["aprovats"] ?></td>
        </tr>
        <tr>
            <td>Suspesos</td>
            <td><?= $resumBuit["suspesos"] ?></td>
        </tr>
        <tr>
            <td>Mitjana</td>
            <td>
                <?= $resumBuit["mitjana"] ?? "Sense dades" ?>
            </td>
        </tr>
    </table>   
    <h2>Exercici 10</h2>
    <h3>Integració de ñes funcions</h3>
    
    <?php
    
    $activitat = [
        "nom" => "Robòtica",
        "preu" => 20,
        "places" => 5
    ];

    $participants = 2;
    $esEstudiant = true;

    if (hiHaPlaces($activitat["places"], $participants)) {
        $reserva = calcularReserva(
            $activitat["preu"],
            $participants,
            $esEstudiant
        );

    ?>

        <h2>Resum de la reserva</h2>

        <table border="1" cellpadding="8">
            <tr>
                <th>Camp</th>
                <th>Resultat</th>
            </tr>
            <tr>
                <td>Activitat</td>
                <td><?= $activitat["nom"] ?></td>
            </tr>
            <tr>
                <td>Participants</td>
                <td><?= $participants ?></td>
            </tr>
            <tr>
                <td>Import inicial</td>
                <td><?= $reserva["import"] ?> €</td>
            </tr>
            <tr>
                <td>Percentatge de descompte</td>
                <td><?= $reserva["percentatge"] ?> %</td>
            </tr>
            <tr>
                <td>Descompte</td>
                <td><?= $reserva["descompte"] ?> €</td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?= $reserva["total"] ?> €</td>
            </tr>
        </table>

    <?php
    } else {
        echo "<p>No hi ha places suficients</p>";
    }
    ?>
</body>
</html>
