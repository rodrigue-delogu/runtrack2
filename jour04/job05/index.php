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
        <label for="nom">Quel est votre username: <br></label>
        <input type="text" name="username" id="nom"><br>

        <label for="prenom">Quel est votre password: <br></label>
        <input type="password" name="password" id="prenom"><br>

        <input type="submit" value="Envoyer le formulaire">
    </form>
<?php
        if ($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
            echo "C'est pas ma guerre";
        }
        else{
        echo "<i>Votre pire cauchemar</i>";
        }
      
?>