<?php
$arg = TRUE;
$arg1 = FALSE;
function bonjour($jour){
    if ($jour == true){
        echo "Bonjour";
    }
    if ($jour == false){
        echo "Bonsoir";
    }
}

bonjour($arg);
bonjour($arg1);
?>