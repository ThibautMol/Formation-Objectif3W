<?php
if (isset($_POST['submit'])){
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];
        $email = $_POST['email'];
        $userPwd = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $statut = $_POST['statut'];
        $classroom = $_POST['classroom'];
        $ClassSpe=$_POST['ClassSpe']; 
    }
    else {
        $userId = $_POST['user_id'];
        $email = $_POST['email'];
        $userPwd = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $statut = $_POST['statut'];
        $classroom = $_POST['classroom'];
        $ClassSpe=$_POST['ClassSpe']; 
    }

    require_once 'sql-data-base-connexion.php';
    try {
    $query = 'UPDATE users SET email = :email, UserPwd = :userPwd, firstname = :firstname, lastname = :lastname, statut = :statut, classroom = :classroom, ClassSpe = :classSpe WHERE id = :userId';
    $updateQuery = $db->prepare($query);
    
    $updateQuery->bindParam(':userId', $userId);
    $updateQuery->bindParam(':email', $email);
    $updateQuery->bindParam(':userPwd', $userPwd);
    $updateQuery->bindParam(':firstname', $firstname);
    $updateQuery->bindParam(':lastname', $lastname);
    $updateQuery->bindParam(':statut', $statut);
    $updateQuery->bindParam(':classroom', $classroom);
    $updateQuery->bindParam(':ClassSpe', $ClassSpe); 
    }
        
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if ($updateQuery->execute()) {
        echo "Les données de l'utilisateur ont été mises à jour avec succès.";
    } else {
        echo "Une erreur s'est produite lors de la mise à jour des données de l'utilisateur.";
    }
    
}
?>
