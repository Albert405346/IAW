<?php
$contacte = [
    "nom" => "Pol",
    "telefon" => null
];
?>

<h2><?= $contacte["nom"] ?></h2>

<?php
if (array_key_exists("telefon", $contacte)) {
    echo "<p>El camp telefon si que existeix.</p>";
} else {
    echo "<p>El camp telefon no existeix.</p>";
}

if (isset($contacte["telefon"])) {
    echo "<p>El camp telefon si que existeix i no és null.</p>";
} else {
    echo "<p>El camp telefon si que existeix i és null.</p>";
}
?>

<h2><?= $contacte["telefon"] ?></h2>

<?php
if (array_key_exists("email", $contacte)) {
    echo "<p>El camp email on si que existeix.</p>";
} else {
    echo "<p>El camp email no existeix.</p>";
}

if (isset($contacte["email"])) {
    echo "<p>El camp email no existeix, no es pot determinar si és null.</p>";
} else {
    echo "<p>El camp email no existeix, no es pot determinar si no és null.</p>";
}

/* Els resultats de les dues comprovacions per a telefon són diferents, ja que:
/ la funció array_key_exists comprova si existeix la clau, independentment del seu valor, 
/ mentre que, la funció isset() comprova si el valor de la clau és null, si aquesta existeix.
*/

?>
