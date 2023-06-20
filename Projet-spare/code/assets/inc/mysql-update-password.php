<?php
session_start();


    
    $id = $_SESSION['SPARE']['USER_ID'];
    $UserPwd = $_POST['password'];
    $first_visit=1; 
    

    require_once 'sql-data-base-connexion.php';
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

?>
