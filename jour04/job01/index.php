<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" class="formCol">
        <label for="nom">Quel est votre nom: <br></label>
        <input type="text" name="nom" id="nom"><br>

        <label for="prenom">Quel est votre prenom: <br></label>
        <input type="text" name="prenom" id="prenom"><br>
        
        <label for="age">Quel est votre age: <br></label>
        <input type="text" name="age" id="age"><br>
    </form>
        <input type="submit" value="Envoyer le formulaire">
<?php
    $compter = 0;
    foreach($_GET as $key => $value){
    $compter++;
    }
    echo "<br>il y a $compter arguments";

?>
</body>
</html>
