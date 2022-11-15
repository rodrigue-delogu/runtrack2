<?php
$x = 0;
while($x <= 1337){
    if ($x <= 20){
        echo "<i>$x <br></i>";
    }
    elseif ($x>=25 && $x<=50){
        echo "<u>$x <br></u>";
    }
    else {
        echo "$x <br>";
    }
    $x++;
}
?>