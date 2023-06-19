<?php
session_start();

if ((isset($_SESSION['SPARE']['errors']))) {
    
    unset($_SESSION['SPARE']['errors']);


header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
exit;
}


?>