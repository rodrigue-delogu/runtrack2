<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="job03.css"/>
    <title>job03</title>
</head>
<body>
    
<?php
$boolean = TRUE;  
$entier = 6987;     
$chainedecaractere  = "kekw";  
$nombreflottant = 1.67; 
?>

<table id="tableau">

<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>

<tr><td>Boolean</td><td>$boolean</td><td><?php echo $boolean ?></td></tr>

<tr><td>Entier</td><td>$entier</td><td><?php echo $entier ?></td></tr>

<tr><td>Chaine de caractère</td><td>$chainedecaractere</td><td><?php echo $chainedecaractere ?></td></tr>

<tr><td>Nombre flottant</td><td>$nombreflottant</td><td><?php echo $nombreflottant ?></td></tr>


</table>
</body>
</html>

