<?php

session_start();

// session_destroy();

if(isset($_SESSION['nbvisite'])){
    $_SESSION['nbvisite'] += 1;
    echo "Count connexion : ".$_SESSION['nbvisite']. " times";
}
else{
    $_SESSION['nbvisite'] = 1;
    echo "Count connexion : ".$_SESSION['nbvisite']. " times";
} 

?>