<?php 

$str = "ABEGLST";

function leetSpeak($str){
    for ($i=0; isset($str[$i]); $i++){
        if("A" === $str[$i]){
            echo 4;        
        }
        elseif("B" === $str[$i]){
            echo 8;        
        }
        elseif("E" === $str[$i]){
            echo 3;        
        }
        elseif("G" === $str[$i]){
            echo 6;        
        }
        elseif("L" === $str[$i]){
            echo 1;        
        }
        elseif("S" === $str[$i]){
            echo 5;        
        }
        elseif("T" === $str[$i]){
            echo 7;        
        }
    }
}
echo leetSpeak($str);
?>