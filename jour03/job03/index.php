<?php
    $str = "I'm sorry Dave i'm affraid i can't do that";
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

    $i=  0;

    while (isset($str[$i])){
        foreach ($voyelles as $vhuayiel){
        if ($str[$i] == $vhuayiel){
       
            echo $str[$i];
        }
    }
        
        $i++;
  
}
?>