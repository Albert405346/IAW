<?php
$nom = "Albert";
$edat = 18;
$ciutat = "Móra d'Ebre";
?>

<!DOCTYPE html>
<html lang="ca"> 
    <head> 
        <meta charset="UTF-8">
        <title>Taula amb HTML/PHP</title>
    </head>
    <body>
        <table border="1"> 
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
 