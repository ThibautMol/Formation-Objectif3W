<?php
session_start();

    require_once ("../functions/valid-donnees.php");

    require_once ("../functions/form-error-checking.php");

    if (($_SESSION['SPARE']['errors']['emailErr'] == "Email déjà utilisé") && 
    (!isset($_SESSION['SPARE']['errors']['lastnameErr'])) &&
    (!isset($_SESSION['SPARE']['errors']['lastnameErr'])) &&
    (!isset($_SESSION['SPARE']['errors']['firstnameErr'])) &&
    (!isset($_SESSION['SPARE']['errors']['ClassSpeErr'])) &&
    (!isset($_SESSION['SPARE']['errors']['classroomErr'])) &&
    (!isset($_SESSION['SPARE']['errors']['statutErr'])))
    {
        unset($_SESSION['SPARE']['errors']);
    }

    // echo'etape 1 ';
    
    if (((!isset($_SESSION['SPARE']['errors'])) && (empty($_SESSION['SPARE']['errors'])))){

        unset($_SESSION['SPARE']['errors']);
        // echo'etape 2 ';

        if ($_POST['id']===$_SESSION['SPARE']['USER_ID']) {
            $id = $_SESSION['SPARE']['USER_ID'];
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $statut = $_POST['statut'];
            $classroom = $_POST['classroom'];
            $ClassSpe=$_POST['ClassSpe'];
            $first_visit=1; 
            // echo'etape 2.1 ';
        }
        
        else {
            
            $id = $_POST['id'];
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $statut = $_POST['statut'];
            $classroom = $_POST['classroom'];
            $ClassSpe=$_POST['ClassSpe'];
            $first_visit=1;
            // echo'etape 2.2 '; 
        }

        require_once 'sql-data-base-connexion.php';
        try {
        $query = 'UPDATE users SET email = :email, firstname = :firstname, lastname = :lastname, statut = :statut, classroom = :classroom, ClassSpe = :ClassSpe, first_visit = :first_visit WHERE id = :id';
        $updateQuery = $db->prepare($query);
        // echo'etape 3 ';
        
        $updateQuery->bindParam(':id', $id);
        $updateQuery->bindParam(':email', $email);
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
        // echo'etape 4 ';
        $updateQuery->execute();

        $_SESSION['SPARE']['errors']['update_success']='Modification(s) bien enregistrée(s)';

        header('Location: ../../profil-user-edit.php');
        exit;
        // echo'etape 5 ';
    }
    else {
        $_SESSION['SPARE']['errors']['update_failed']='Modification(s) non prises en compte';
        
        header('Location: ../../profil-user-edit.php');
        exit;
        // echo'etape 6 ';
    }

?>
