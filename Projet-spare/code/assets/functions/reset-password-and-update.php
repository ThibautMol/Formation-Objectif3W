<?php 
require_once("valid-donnees.php");

$confirm_pwd=valid_donnees($_POST['confirm_pwd']);
$UserPwd=valid_donnees($_POST['new_pwd']);



if ($confirm_pwd===$UserPwd) {
    
    $UserPwd=password_hash($UserPwd,PASSWORD_BCRYPT);
   
    require("../inc/mysql-update-password.php");

    if ((isset($_SESSION['SPARE']['errors']['confirm_pwd_err'])) && (!empty($_SESSION['SPARE']['errors']['confirm_pwd_err']))){
        unset($_SESSION['SPARE']['errors']['confirm_pwd_err']);
        
    }

    header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/dashboard.php');
    exit;

} 

else {
    $_SESSION['SPARE']['errors']['confirm_pwd_err']="Les mots de passe ne correspondent pas";
    
    header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/reset-password.php');
    exit;
}


?>