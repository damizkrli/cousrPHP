<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les Tests"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
$rdm1 = rand(1, 100);
$rdm2 = rand(1, 100);

echo "Chiffre 1 : " . $rdm1;
echo "<br />";  
echo "Chiffre 2 : " . $rdm2;
// si le nb est positif il est égal à sa propre valeur 
// si il est négatif il faut le multipliser par -1

$resultat = abs($rdm1 - $rdm2);

echo "<br />";  

if ($resultat > 25 && $resultat < 75) {
    echo "La valeur absolue de " . $rdm1 . " - " . $rdm2 . " est comprise entre 25 et 75";
}
else {
    echo "La valeur absolue de " . $rdm1 . " - " . $rdm2 . " n'est pas comprise entre 25 et 75";
}

echo "<br />";  
echo "<h2> $resultat </h2>";

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
