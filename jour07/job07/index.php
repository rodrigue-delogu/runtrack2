<form method="post" action="index.php">
<p>
    <label>Enter your text :</label>
    <input type="texte" name="text" id="text" required>
    
    <select method="post" name="fonction">
        <option id="gras" name="gras" value="gras">gras</option>
        <option id="cesar" name="cesar" value="cesar">cesar</option>
        <option id="plateforme" name="plateforme" value="plateforme">plateforme</option>
    </select>
    <!-- <label>César :</label> -->
     <input type="submit" value="bouton submit" title="valider pour aller à la page sélectionnée" />
</p>


<?php

function gras($str){
    for ($i=0; $str[$i] ; $i++) { 
        
    }
}



?>
