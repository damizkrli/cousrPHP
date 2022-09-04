<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les Tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<!-- Choisir un nb aléatoire entre 1 et 20 -->
<!-- en fonction du résultat : -->
<!--Il est comprit entre 1 et 5 -->
<!--Il est comprit entre 6 et 10 -->
<!--Il est comprit entre 11 et 15 -->
<!--Il est comprit entre 16 et 20-->


<?php 

$nb = rand(1,20);

echo "<h2>Le nombre est : $nb </h2>";

if ($nb <= 5) {
    echo "Il est comprit entre 1 et 5";
} 
elseif ($nb <= 10) {
    echo "Il est comprit entre 6 et 10";
} 
elseif ($nb <= 15) {
    echo "Il est comprit entre 11 et 15";
}
else {
    echo "Il est comprit entre 16 et 20";
}

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
