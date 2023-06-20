<?php
session_start();


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $email = $_POST['email'];
        $UserPwd = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $statut = $_POST['statut'];
        $classroom = $_POST['classroom'];
        $ClassSpe=$_POST['ClassSpe'];
        $first_visit=1; 
    }
    else {
        $id = $_SESSION['SPARE']['USER_ID'];
        $email = $_POST['email'];
        $UserPwd = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $statut = $_POST['statut'];
        $classroom = $_POST['classroom'];
        $ClassSpe=$_POST['ClassSpe'];
        $first_visit=1; 
    }

    require_once 'sql-data-base-connexion.php';
    try {
    $query = 'UPDATE users SET email = :email, UserPwd = :UserPwd, firstname = :firstname, lastname = :lastname, statut = :statut, classroom = :classroom, ClassSpe = :ClassSpe, first_visit = :first_visit WHERE id = :id';
    $updateQuery = $db->prepare($query);
    
    $updateQuery->bindParam(':id', $id);
    $updateQuery->bindParam(':email', $email);
    $updateQuery->bindParam(':UserPwd', $UserPwd);
    $updateQuery->bindParam(':firstname', $firstname);
    $updateQuery->bindParam(':lastname', $lastname);
    $updateQuery->bindParam(':statut', $statut);
    $updateQuery->bindParam(':classroom', $classroom);
    $updateQuery->bindParam(':ClassSpe', $ClassSpe); 
    $updateQuery->bindParam(':first_visit', $first_visit);
    }
        
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $updateQuery->execute();

?>
