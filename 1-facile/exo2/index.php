<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et Ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php 
$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = false;

echo $nom . " à " . $age . " ans";
echo (!$homme) ? " et c'est une femme" : " et c'est un homme.";

echo "<br />";
echo $nom2 . " à " . $age2 . " ans";
// TERNAIRE
echo (!$homme2) ? " et c'est un homme" : " et c'est une femme.";

// --> 
// if (!$homme) {
//     echo " et c'est une femme";
// } else {
//     echo " et c'est un homme";
// }

?>

<?= $nom2  
// équivalent à un echo
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
