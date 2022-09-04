<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a = 3;
$b = 5;
$c = 7;
?>
<hr>
************ AVANT PERMUTATION ************ 
<br>
A : <?php echo $a ?>
<br>

B : <?php echo $b ?>
<br>

C : <?php echo $c ?>
<br>

************ APRES PERMUTATION ************ 
<?php
$tmp = $a;
$a = $b;
$b = $c;
$c = $tmp;
?>

<br>
A : <?php echo $a ?>

<br>

B : <?php echo $b ?>
<br>


C : <?php echo $c ?>
<br>





<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
