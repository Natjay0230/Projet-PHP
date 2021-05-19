<?php
session_start();
include('Views/Public/V_menu_public.php');
include('Controllers/C_message.php');

if($_SESSION['utilisateur'] == 'etudiant'){
    $message = new C_message();
    $message -> envoye_message();
}else{
    echo 'Seul les etudiants peuvent envoyer des messages privé!!!!!';
}
?>