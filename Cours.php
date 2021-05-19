<?php
session_start();
include('Views/Public/V_menu_public.php');
include('Controllers/C_Module.php');

$prof = new C_Module();
$prof -> cours_professeur();
?>