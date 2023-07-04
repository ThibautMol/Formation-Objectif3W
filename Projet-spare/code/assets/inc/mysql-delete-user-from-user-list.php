<?php 
session_start();


if (((isset($_GET['id'])) && (!empty($_GET['id']))) && 
((isset($_SESSION['SPARE']['USER_ID'])) && (!empty($_SESSION['SPARE']['USER_ID']))) && 
($_GET['id']!=$_SESSION['SPARE']['USER_ID'])) {
 

    require_once 'sql-data-base-connexion.php';

    $id=$_GET['id'];
    
    try {
        $query = 'DELETE FROM users WHERE id = :id';
        $deleteQuery = $db->prepare($query);

        $deleteQuery->bindParam(':id', $id);
    }
        
        
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

   
    $deleteQuery->execute();


    $_SESSION['SPARE']['errors']['delete_success']='Utilisateur bien supprimé';

    header('Location: ../../users-list.php');
    exit;
    

}

else {

    $_SESSION['SPARE']['errors']['delete_fail']='Utilisateur non-supprimé';

    header('Location: ../../users-list.php');
    exit;

}
