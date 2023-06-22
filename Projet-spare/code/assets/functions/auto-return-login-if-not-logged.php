<?php

if (((!isset($_SESSION['SPARE']['USER_ID'])) && (empty($_SESSION['SPARE']['USER_ID']))) || 
((!isset($_SESSION['SPARE']['USER_ID'])) || (empty($_SESSION['SPARE']['USER_ID'])))) {

    header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/login.php');
    exit;

}