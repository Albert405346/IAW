<?php

// 1 - Salutació personalitzada: 

function crearSalutacio($nom) {
    return "Hola, $nom! Benvingut/uda a IAW!";
}

// 2 - Import d'una compra:

function calculaImport($preu, $quantitat) {
    return $preu * $quantitat;
}

// 3 - Descompte opcional:

function aplicarDescompte($import, $percentatge) {
    $resultat = $import - ($import * $percentatge / 100);
    return $resultat;
}

// 4 - Qualificació d'una nota:

function obtenirQualifiaccio($nota) {
    if ($nota <= 0 || $nota >= 10) {
        return "Nota no vàlida.";
    } 
    elseif ($nota >= 5) {
        return "Aprovat";
    } 
    else {
        return "Suspés";
    }
}

// 5 - Comprovar les places:

function hiHaPlaces($disponibles, $sollicitades) {
    if ($disponibles < 0 || $sollicitades <= 0 || $sollicitades > $disponibles) {
        return false;
    } 
    else {
        return true;
    }
}

// 6 - Suma d'un interval:

function sumarFins($limit) {
    if ($limit < 1) {
        return 0;
    }

    $suma = 0;

    for ($i = 1; $i <= $limit; $i++) {
        $suma += $i;
    }

    return $suma;
}

// 7 - Mitjana d'una llista de notes:

function calcularMitjana($notes) {
    if (empty($notes)) {
        return null;
    }

    $suma = 0;

    foreach ($notes as $nota) {
        $suma += $nota;
    }
    return $suma / count($notes);
}

// 8 - Obtenir els nombres parells:

function obtenirParells($nombres) {
    $resultat = [];

    foreach ($nombres as $nombre) {
        if ($nombre % 2 == 0) {
            $resultat[] = $nombre;
        }
    }
    return $resultat;
}

// 9 - Resum d'un grup: 

function resumirGrup($alumnes) {
    $total = 0;
    $aprovats = 0;
    $suspesos = 0;
    $sumaNotes = 0;

    foreach ($alumnes as $alumne) {
        $total++;
        $sumaNotes += $alumne["nota"];

        if ($alumne["nota"] >= 5) {
            $aprovats++;
        } 
        else {
            $suspesos++;
        }
    }

    if ($total > 0) {
        $mitjana = $sumaNotes / $total;
    } else {
        $mitjana = null;
    }

    return [
        "total" => $total,
        "aprovats" => $aprovats,
        "suspesos" => $suspesos,
        "mitjana" => $mitjana
    ];
}

// Integració de les funcions:

function calcularImport($preu, $participants) {
    return $preu * $participants;
}


function calcularReserva($preu, $participants, $esEstudiant) {

    $import = calcularImport($preu, $participants);

    if ($esEstudiant) {
        $percentatge = 20;
    } elseif ($participants == 4 || $participants == 5) {
        $percentatge = 10;
    } else {
        $percentatge = 0;
    }

    $descompte = $import * $percentatge / 100;

    $total = $import - $descompte;

    return [
        "import" => $import,
        "percentatge" => $percentatge,
        "descompte" => $descompte,
        "total" => $total
    ];
}

?>
