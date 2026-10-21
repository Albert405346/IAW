<?php
$nom = "Albert";
$imatge = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwBzpN4elNF5lnZPfKL6lezDwb8LeTQQqvDyzjPubcHi71Site5hRvQT0&s=10";
?>

<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>La meva targeta</title>
    </head>
    <body>
        <center>
            <h1>Hola, sóc <?php echo $nom; ?>!</h1>
            <img src="<?php echo $imatge; ?>" width="200" alt="La meva imatge">
            <p>Data actual: <?php echo date("d/m/Y"); ?></p>
            <p>Benvingut a la meva targeta personal!</p>
        <center>    
    </body>
</html>
