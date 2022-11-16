<?php
    $nbr = array(200, 204, 173, 98, 171, 404, 459);
   
    foreach ($nbr as $val){
        if ($val % 2 === 0){
            echo "$val est pair <br>";
        }
        else {
            echo "$val est impair <br>";
        }
    }
?>
