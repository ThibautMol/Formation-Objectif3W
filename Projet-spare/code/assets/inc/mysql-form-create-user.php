<?php
session_start();

require_once ("sql-data-base-connexion.php");
require_once("mysql-profil-user-id-email-request.php");

function generating_id($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
function mdp_generator ($firstname, $lastname) {
    $UserPwd=substr($firstname, 0 , 1).$lastname; 
    return $UserPwd;
}

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlentities($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}


foreach ($all_user_id_email_request as $data) {
    $all_user_email[]=$data['email'];
    $all_user_id[]=$data['id'];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "étape 1 ";

    $firstname = $lastname = $email = $role = $ClassSpe = $classroom = "";

    $email=strtolower($_POST['email']); 
    $firstname=strtolower($_POST['firstname']); 
    $lastname=strtolower($_POST['lastname']); 
    $statut=strtolower($_POST['statut']); 
    $classroom=strtolower($_POST['classroom']);
    $ClassSpe=strtolower($_POST['ClassSpe']); 

    echo 'passer toutes mes vérifs en dynamiques via les éléments contenus dans mes tables (penser à faire un foreach)';

    if (isset($_POST['statut'])){

        echo "étape 2 ";
        $statut = valid_donnees($_POST['statut']);
        
        if (empty($_POST['statut'])) {
            $_SESSION['statutErr'] = "Statut is required"; 
            echo "étape 2.1 ";
        }
        else {
            
            if (($statut!='administrateur') || ($statut!='agent de traitement') || ($statut!='professeur') || ($statut!='eleve')) {
                $_SESSION['statutErr'] = "Merci de choisir un des statuts prédéfinis";
                echo "étape 2.2 "; 
                
            }
            else {
                unset($_SESSION['statutErr']);
                echo "étape unset ";
            }
        }
    }

  
     if (empty($_POST["classroom"])) {
        echo "étape 3 ";
        $classroom = valid_donnees($_POST["classroom"]); 
    

        if (($classroom!=="class1") || ($classroom!=="class2") || ($classroom!=="class3") || ($classroom!=="class4") || ($classroom!=="class5")) {
            echo "étape 3.1 ";
            $_SESSION['classroomErr'] = "Merci de choisir une des classes prédéfinis";
        }

        else {
            unset($_SESSION['classroomErr']);
            echo "étape unset ";
        }
    }
    


    
    if (empty($_POST['ClassSpe'])){
        echo "étape 4 ";
        $ClassSpe = valid_donnees($_POST["ClassSpe"]);
      
      if (($ClassSpe!=="class1-1") || ($ClassSpe!=="class1-2") || ($ClassSpe!=="class1-3")) {
        echo "étape 4.2 ";
        $_SESSION['ClassSpeErr'] = "Merci de choisir une des classes prédéfinis";        
      }
      else {
        unset($_SESSION['ClassSpeErr']);
        echo "étape unset ";
      }
    }


  if (isset($_POST['firstname'])){
    echo "étape 5 ";

    if (empty($_POST["firstname"])) {
      $_SESSION['firstnameErr'] = "Firstname is required";
      echo "étape 5.1 ";
    } else {
      $firstname = valid_donnees($_POST["firstname"]);
      // check if name only contains letters and whitespace
      echo "étape 5.2 ";
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $_SESSION['firstnameErr'] = "Only letters and white space allowed";
            echo "étape 5.3 ";
        }
        else {
            unset($_SESSION['firstnameErr']);
            echo "étape unset ";
        }
    }
  }

  if (isset($_POST['lastname'])){
    echo "étape 6 ";

    if (empty($_POST["lastname"])) {
      $_SESSION['lastnameErr'] = "lastname is required";
      echo "étape 6.1 ";
    } else {
      $firstname = valid_donnees($_POST["lastname"]);
      echo "étape 6.2 ";
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $_SESSION['lastnameErr'] = "Only letters and white space allowed";
        echo "étape 6.3 ";
      }
      else {
        unset($_SESSION['lastnameErr']);
        echo "étape unset ";
      }
    }
  }
  
  if (isset($_POST['email'])){
    echo "étape 7 ";

        if (empty($_POST["email"])) {
        $_SESSION['emailErr'] = "Email is required";
        echo "étape 7.1 ";
        } else {
        $email = valid_donnees($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailErr'] = "Invalid email format";
            echo "étape 7.2 ";
        }
        else {
            unset($_SESSION['emailErr']);
            echo "étape unset ";
          }
        }
    }

    if ((!in_array($email,$all_user_email)) && 
    (((!isset($_SESSION['statutErr'])) && (empty($_SESSION['statutErr']))) 
    && ((!isset($_SESSION['statutErr'])) && (empty($_SESSION['statutErr']))) 
    && ((!isset($_SESSION['classroomErr'])) && (empty($_SESSION['classroomErr']))) 
    && ((!isset($_SESSION['ClassSpeErr'])) && (empty($_SESSION['ClassSpeErr']))) 
    && ((!isset($_SESSION['firstnameErr'])) && (empty($_SESSION['firstnameErr']))) 
    && ((!isset($_SESSION['lastnameErr'])) && (empty($_SESSION['lastnameErr']))) 
    && ((!isset($_SESSION['emailErr'])) && (empty($_SESSION['emailErr']))))) 
    {
        unset($_SESSION['roleErr']);
        unset($_SESSION['classroomErr']);
        unset($_SESSION['ClassSpeErr']);
        unset($_SESSION['firstnameErr']);
        unset($_SESSION['lastnameErr']);
        unset($_SESSION['emailErr']);

        echo "etape 8 ";
        
        do{
        
            $id=generating_id($data = null);

        }while(in_array($id,$all_user_id));

        $UserPwd=mdp_generator($firstname,$lastname);
        
        $first_visit=0;

        date_default_timezone_set('Europe/Paris');
        $CreationAccount = date("Y-m-d");

        $sqlQuery ='INSERT INTO users (id, email, UserPwd, firstname, lastname, statut, classroom, ClassSpe, first_visit, CreationAccount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $insert_user= $db->prepare($sqlQuery);

        $insert_user->execute([
            $id,
            $email,
            $UserPwd,
            $firstname,
            $lastname,
            $statut,
            $classroom,
            $ClassSpe,
            $first_visit, 
            $CreationAccount,
        ]);      
    
        $_SESSION['confirm_creation_user']="Utilisateur bien enregistré";
        echo "etape 8.1 ";
    }

    else {
        
        $_SESSION['error_creation_user']="Email déjà utilisé";
        echo "etape 9 ";
    }
   ;
    
    // header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
    // exit;
    echo "etape 10 ";
}

