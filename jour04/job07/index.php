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
echo "<pre>";
    if ($_POST) {
        $l = $_POST["hauteur"];
      
        for ($i = 1; $i <= $_POST["hauteur"]; $i++){
            for($j = 0; $j <= $_POST["hauteur"]-$i; $j++){
                echo " ";
            }
            echo "/";
            for($k = 1; $k <= $_POST["hauteur"]-$l; $k++){
            echo "_";
        }
            echo "\\";
            echo "</br>";
            $l = $l - 2;
        }
        


        for ($i = 1; $i <= $_POST["hauteur"]; $i++) {
            echo "|";
            for ($j = 1; $j <= $_POST["largeur"]; $j++) {
                if ($_POST["hauteur"] == $i){
                    echo "_";    
                }
                else{
                    echo "&nbsp";
                }
            }
            echo "|<br>";
        }
    }
echo "</pre>"
    ?>
</body>

</html>