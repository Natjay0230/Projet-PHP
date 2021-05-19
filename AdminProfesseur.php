<?php
include("Views/Admin/MenuAdmin.php");
include("Controllers/C_professeur.php");

$prof = new C_professeur();
$prof -> inserer_prof();
$prof -> effacer_prof();
$prof -> modifier_prof();
$prof -> affichage_prof();

?>