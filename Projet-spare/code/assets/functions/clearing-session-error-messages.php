<?php
session_start();

if ((isset($_SESSION['error_creation_user'])) || (isset($_SESSION['confirm_creation_user']))) {
    
    unset($_SESSION['error_creation_user']);
    unset($_SESSION['confirm_creation_user']);

header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
exit;
}


?>