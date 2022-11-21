 <?php

// Correction de Nicolas ne pas prendre en compte ce job 07
$str = "Certaines choses changent, d'autres ne changeront jamais";

$newStr = "";

$tmp = "";

    for($i = 0; $i < 1; $i++){
            $tmp .= $str[$i];
        
        }

    for($i = $i; isset($str[$i]); $i++){
        $newStr .= $str[$i];
        }

        $newStr .= $tmp;

    var_dump($newStr);
?>