<?php
session_start();

if ((isset($_SESSION['SPARE']['error_creation_user'])) || (isset($_SESSION['SPARE']['confirm_creation_user']))) {
    
    unset($_SESSION['SPARE']['error_creation_user']);
    unset($_SESSION['SPARE']['confirm_creation_user']);

header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
exit;
}


?>