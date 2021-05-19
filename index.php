<?php
session_start();
include('Controllers/C_login.php');
$connexion = new C_login();
$connexion -> connexion();
?>