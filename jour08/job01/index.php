<?php
session_start();

if(isset($_POST['button1'])) {
    $_SESSION['nbvisite'] = 0;
}

if(isset($_SESSION['nbvisite'])){
    $_SESSION['nbvisite'] += 1;
    echo "Count connexion : ".$_SESSION['nbvisite']. " times";
}
else{
    $_SESSION['nbvisite'] = 1;
    echo "Count connexion : ".$_SESSION['nbvisite']. " times";
}

?>
    <form method="post">
        <input type="submit" name="button1" value="reset" />
    </form>

 
