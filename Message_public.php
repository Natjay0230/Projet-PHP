<?php
session_start();
include('Views/Public/V_menu_public.php');
include('Controllers/C_publication.php');

$post = new C_publication();
if($_SESSION['utilisateur'] == 'professeur'){
    $post -> publier();
}
$post ->affichage_publication();

?>