<?php 

$str = "ABEGLST";

function leetSpeak($str){
    for ($i=0; isset($str[$i]); $i++){
        if("A" === $str[$i] || "a" === $str[$i]){
            $str[$i] = 4;        
        }
        elseif("B" === $str[$i] || "b" === $str[$i]){
            $str[$i] = 8;        
        }
        elseif("E" === $str[$i] || "e" === $str[$i]){
            $str[$i] = 3;        
        }
        elseif("G" === $str[$i] || "g" === $str[$i]){
            $str[$i] = 6;        
        }
        elseif("L" === $str[$i] || "l" === $str[$i]){
            $str[$i] = 1;        
        }
        elseif("S" === $str[$i] ||"s" === $str[$i]){
            $str[$i] = 5;        
        }
        elseif("T" === $str[$i] || "t" === $str[$i]){
            $str[$i] = 7;        
        }
    }
return $str;
}

echo leetSpeak($str);
?>