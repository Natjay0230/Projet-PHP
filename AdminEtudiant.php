<?php
include("Views/Admin/MenuAdmin.php");
require("Controllers/C_etudiant.php");

$etudiant = new C_etudiant();
$etudiant -> inserer_etudiant();
$etudiant -> effacer_etudiant();
$etudiant -> modifier_etudiant();
$etudiant -> affichage_etudiant();

?>