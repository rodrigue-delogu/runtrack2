<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic=["voyelles" => ["a", "e", "i", "o", "u", "y", "O"]];

$dic1=["consonnes" => ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"]];

$countvoyelles = 0;
$countconsonnes = 0;

    for ($i=0; isset($str[$i]) ; $i++) { 
        foreach($dic["voyelles"] as $voyelles)
        if($str[$i] === $voyelles){
            $countvoyelles++;
        }
    }
    for ($i=0; isset($str[$i]) ; $i++) { 
        foreach($dic1["consonnes"] as $consonnes)
        if($str[$i] === $consonnes){
            $countconsonnes++;
        }
    }
?>
<table>
        <tr>
            <td>Consonnes</td>
            <td>Voyelles</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $countconsonnes;?></td>
            <td><?php echo $countvoyelles;?></td>
        </tr>
</table>