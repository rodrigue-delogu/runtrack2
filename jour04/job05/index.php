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
        <label for="username">Quel est votre username: <br></label>
        <input type="username" name="username" id="username"><br>

        <label for="password">Quel est votre password: <br></label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Envoyer le formulaire">
    </form>

<?php
    if (isset($_POST["username"]) && isset($_POST["password"])){
        if ($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
            echo "C'est pas ma guerre";
        }
        else{
        echo "<i>Votre pire cauchemar</i>";
        }
} 
?>