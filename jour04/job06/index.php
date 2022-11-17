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
        <label for="nombre">Entrez un nombre: <br></label>
        <input type="nombre" name="nombre" id="nombre"><br>

        <input type="submit" value="Envoyer le formulaire">
    </form>

<?php
    if (isset($_GET["nombre"])){
        if ($_GET["nombre"] % 2 === 0){
            echo "Nombre pair";
        }
        else{
        echo "Nombre impair";
        }
}
?>