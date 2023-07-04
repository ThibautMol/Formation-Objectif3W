<?php 
session_start();
require_once ("password-generator.php");
require_once("../inc/mysql-profil-user-request.php");

if (((isset($_SESSION['SPARE']['user_id_checking'])) && (!empty($_SESSION['SPARE']['user_id_checking'])))  || 
((isset($_SESSION['SPARE']['USER_ID'])) && (!empty($_SESSION['SPARE']['USER_ID'])))) {
    
    if (isset($_SESSION['SPARE']['user_id_checking'])) {

        foreach ($all_profil_user as $user) {
            if ($_SESSION['SPARE']['user_id_checking']==$user['id']){
                $firstname = $user['firstname'];
                $lastname = $user['lastname'];
            }
        }
        
        
        $id=$_SESSION['SPARE']['user_id_checking'];
        $UserPwd=mdp_generator($firstname, $lastname);
        $first_visit=0;
        
        require_once ('../inc/sql-data-base-connexion.php');

        try {

        $query = 'UPDATE users SET UserPwd = :UserPwd, first_visit = :first_visit WHERE id = :id';

        $updateQuery = $db->prepare($query);
        
        $updateQuery->bindParam(':id', $id);
        $updateQuery->bindParam(':UserPwd', $UserPwd);
        $updateQuery->bindParam(':first_visit', $first_visit);
        
        }
            
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateQuery->execute();


        $_SESSION['SPARE']['errors']['reset_password_success']='Mot de passe réinitialisé';

        header('Location: ../../view-user.php');
        exit;
        // echo'etape 5 ';
        
    }
    else {
        
        foreach ($all_profil_user as $user) {
            if ($_SESSION['SPARE']['USER_ID']==$user['id']){
                $firstname = $user['firstname'];
                $lastname = $user['lastname'];
            }
        }
        
        $id=$_SESSION['SPARE']['USER_ID'];
        $UserPwd=mdp_generator($firstname, $lastname);
        $first_visit=0;

        require_once ('../inc/sql-data-base-connexion.php');
        try {

        $query = 'UPDATE users SET UserPwd = :UserPwd, first_visit = :first_visit WHERE id = :id';

        $updateQuery = $db->prepare($query);
        
        $updateQuery->bindParam(':id', $id);
        $updateQuery->bindParam(':UserPwd', $UserPwd);
        $updateQuery->bindParam(':first_visit', $first_visit);
        
        }
            
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateQuery->execute();


        $_SESSION['SPARE']['errors']['reset_password_success']='Mot de passe réinitialisé';

        header('Location: ../../view-user.php');
        exit;
        // echo'etape 6 ';
        
    }
}

else {
    $_SESSION['SPARE']['errors']['reset_password_err']='Modification(s) non prises en compte';
    
    header('Location: ../../view-user.php');
    exit;
    // echo'etape 7 ';
}

?>