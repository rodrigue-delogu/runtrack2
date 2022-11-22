<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
    if ($_POST) {
        if  ($_POST["job5"] == 'style1') {
        echo '<link rel="stylesheet" href="css/style1.css">';
    }
        elseif ($_POST["job5"] == 'style2') {
        echo '<link rel="stylesheet" href="css/style2.css">';
    }
        elseif ($_POST["job5"] == 'style3') {
        echo '<link rel="stylesheet" href="css/style3.css">';
    }
}

?>

</head>
<body>

<form method="post" action="index.php">
<p>
     <select method="post" name="job5">
          <option id="style1" name="style1" value="style1">style1</option>
          <option id="style2" name="style2" value="style2">style2</option>
          <option id="style3" name="style3" value="style3">style3</option>
     </select>

     <input type="submit" value="bouton submit" title="valider pour aller à la page sélectionnée" />

</p>
</form>
</body>
</html>