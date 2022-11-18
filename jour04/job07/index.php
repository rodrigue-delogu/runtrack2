<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" class="formCol">
        <label for="hauteur">Entrez une hauteur: <br></label>
        <input type="hauteur" name="hauteur" id="hauteur"><br>

        <label for="largeur">Entrez une largeur: <br></label>
        <input type="largeur" name="largeur" id="largeur"><br>

        <input type="submit" value="Envoyer le formulaire">
    </form>

<?php

    if($_POST){
        for($i = 1; $i <= $_POST["hauteur"]; $i++){                                                                                       
            echo "|";
            for($j = 1; $j <= $_POST["largeur"]; $j++){
            echo "&nbsp;";
            
    }   echo "|<br>";
}
}
?>
</body>
</html>