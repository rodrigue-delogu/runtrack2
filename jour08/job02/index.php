<?php
$nbvisites = 0;

if(isset($_POST['button1'])) {
    setcookie('nbvisites', $nbvisites, time()+3600);
    header("Location: index.php");
    exit();
}


if(isset($_COOKIE['nbvisites'])){
    $nbvisites = $_COOKIE['nbvisites'];
    $nbvisites ++;
}
setcookie('nbvisites', $nbvisites, time()+3600);

if($nbvisites === 1){
    echo "Helloooooo, new fan !";
} 
else {
    echo "This is your visit number ".$_COOKIE['nbvisites'];
    echo '<br>';
}

?>
    <form method="post">
        <input type="submit" name="button1" value="reset" />
    </form>