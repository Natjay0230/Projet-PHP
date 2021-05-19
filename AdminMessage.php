<?php
include('Views/Admin/MenuAdmin.php');
include('Controllers/C_message.php');

$message = new C_message();
$message -> affichage_message();
$message -> effacer();
?>