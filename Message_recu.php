<?php
session_start();
include('Controllers/C_message.php');

$message = new C_message;
$message -> message_recu();
?>