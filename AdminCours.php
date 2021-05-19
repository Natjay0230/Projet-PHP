<?php
include("Views/Admin/MenuAdmin.php");
include('Controllers/C_Module.php');

$module = new C_module();
$module -> inserer_module();
$module -> supprimer_module();
$module -> afficher_module();

?>