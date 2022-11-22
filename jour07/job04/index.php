<?php
$a = 9;
$b = 5;
$operation = '*';

function calcule($a, $operation, $b){
        if ($operation == '+'){
        echo $a + $b;
    }
        elseif ($operation == '-'){
        echo $a - $b;
    }
        elseif ($operation == '/'){
        echo $a / $b;
    }
        elseif ($operation == '*'){
        echo $a * $b;
    }
        elseif ($operation == '%'){
        echo $a % $b;
    }
}
echo calcule($a, $operation, $b);
?>