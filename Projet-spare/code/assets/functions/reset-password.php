<?php 
session_start();
require_once ("password-generator.php");
require_once("../inc/mysql-profil-user-request.php");
require_once("password-generator.php");

//penser à utiliser mes deux variables soit l'id soit celle dans consultation profil
// récupérer nom et prénom des gens via tous les profils faire un foreach et chercher via l'id



(isset($_SESSION['SPARE']['user_id_checking']));

if (((isset($_SESSION['SPARE']['user_id_checking'])) && (!empty($_SESSION['SPARE']['user_id_checking'])))  || 
((isset($_SESSION['SPARE']['USER_ID'])) && (!empty($_SESSION['SPARE']['USER_ID'])))) {
    
    if (isset($_SESSION['SPARE']['user_id_checking'])) {
        
        
        $id=$_SESSION['SPARE']['user_id_checking'];
        $UserPwd=mdp_generator($firstname, $lastname);
        require_once 'sql-data-base-connexion.php';
        try {

        $query = 'UPDATE users SET UserPwd = :UserPwd WHERE id = :id';

        $updateQuery = $db->prepare($query);
        
        $updateQuery->bindParam(':id', $id);
        $updateQuery->bindParam(':UserPwd', $UserPwd);
        
        }
            
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateQuery->execute();


        $_SESSION['SPARE']['errors']['reset_password_success']='Mot de passe réinitialisé';

        header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/profil-user-edit.php');
        exit;
        // echo'etape 5 ';
        
    }
    else {
        
        
        $id=$_SESSION['SPARE']['USER_ID'];
        $UserPwd=mdp_generator($firstname, $lastname);
        require_once 'sql-data-base-connexion.php';
        try {

        $query = 'UPDATE users SET UserPwd = :UserPwd WHERE id = :id';

        $updateQuery = $db->prepare($query);
        
        $updateQuery->bindParam(':id', $id);
        $updateQuery->bindParam(':UserPwd', $UserPwd);
        
        }
            
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateQuery->execute();


        $_SESSION['SPARE']['errors']['reset_password_success']='Mot de passe réinitialisé';

        header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/profil-user-edit.php');
        exit;
        // echo'etape 6 ';
        
    }
}

else {
    $_SESSION['SPARE']['errors']['reset_password_err']='Modification(s) non prises en compte';
    
    header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/profil-user-edit.php');
    exit;
    // echo'etape 7 ';
}

?>