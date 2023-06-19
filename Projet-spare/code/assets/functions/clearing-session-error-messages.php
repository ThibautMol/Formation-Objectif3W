<?php
session_start();

if ((isset($_SESSION['SPARE']['error_creation_user'])) || (isset($_SESSION['SPARE']['confirm_creation_user']))) {
    
    unset($_SESSION['SPARE']['error_creation_user']);
    unset($_SESSION['SPARE']['confirm_creation_user']);
    unset($_SESSION['SPARE']['statutErr']);
    unset($_SESSION['SPARE']['classroomErr']);
    unset($_SESSION['SPARE']['ClassSpeErr']);
    unset($_SESSION['SPARE']['firstnameErr']);
    unset($_SESSION['SPARE']['lastnameErr']);
    unset($_SESSION['SPARE']['emailErr']);


header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
exit;
}


?>