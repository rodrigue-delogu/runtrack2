<?php
    $str = "Bonjour";
    $char = "o";
function occurences($str, $char){
    $count = 0;

    // take all character in var
    for ($i=0; isset($str[$i]); $i++) { 
        
        // char count in string if = o
        if($str[$i] === $char){

        $count++;
    }
    }
    return $count++;
}
echo occurences($str, $char);
?>