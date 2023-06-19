<?php
session_start();

require_once ("sql-data-base-connexion.php");
require_once("mysql-profil-user-id-email-request.php");
require_once ("mysql-all-spe-classes-request.php");
require_once ("mysql-all-roles-request.php");
require_once("mysql-all-main-classes-request.php");

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

    password_hash($UserPwd,PASSWORD_BCRYPT);
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

foreach ($all_spe_classes as $data) {
  $all_spe_classes_formated[]=$data['name'];
}

foreach ($all_main_classes as $data) {
  $all_main_classes_formated[]=$data['name'];
}

foreach ($all_roles as $data) {
  $all_roles_formated[]=$data['name'];
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //echo "étape 1 ";

  $firstname = $lastname = $email = $role = $ClassSpe = $classroom = "";

  $email=strtolower($_POST['email']); 
  $firstname=strtolower($_POST['firstname']); 
  $lastname=strtolower($_POST['lastname']); 
  $statut=strtolower($_POST['statut']); 
  $classroom=strtolower($_POST['classroom']);
  $ClassSpe=strtolower($_POST['ClassSpe']); 


  if (isset($_POST['statut'])){

    //echo "étape 2 ";
    $statut = valid_donnees($_POST['statut']);
      
    if (empty($_POST['statut'])) {
      $_SESSION['SPARE']['statutErr'] = "Veuillez spécifier un statut"; 
      //echo "étape 2.1 ";
    }
    else {
        
      if (!in_array($statut,$all_roles_formated)) {
        $_SESSION['SPARE']['statutErr'] = "Merci de choisir un des statuts prédéfinis";
        //echo "étape 2.2 "; 
          
      }
      else {
        unset($_SESSION['SPARE']['statutErr']);
        //echo "étape unset ";
      }
    }
  }

  
  if (isset($_POST['ClassSpe'])){
    echo "étape 3 ";

    $classroom = valid_donnees($_POST["classroom"]); 

    if (empty($_POST["classroom"])) {
      //echo "étape 3.1 ";
      unset($_SESSION['SPARE']['classroomErr']);
     
    }
    else {
      if (!in_array($classroom,$all_main_classes_formated)) {
        //echo "étape 3.2 ";
        $_SESSION['SPARE']['classroomErr'] = "Merci de choisir une des classes prédéfinies";
      }

      else {
        unset($_SESSION['SPARE']['classroomErr']);
        //echo "étape unset ";
      }
    }
    
  }
 
  if (isset($_POST['ClassSpe'])){
    //echo "étape 4 ";
    
    $ClassSpe = valid_donnees($_POST["ClassSpe"]);

    if (empty($_POST['ClassSpe'])){
      //echo "étape 4.1 ";
      unset($_SESSION['SPARE']['ClassSpeErr']);
    }
    else {
      if (!in_array($ClassSpe,$all_spe_classes_formated)) {
        //echo "étape 4.2 ";
        $_SESSION['SPARE']['ClassSpeErr'] = "Merci de choisir une des classes prédéfinies";        
      }
      else {
        unset($_SESSION['SPARE']['ClassSpeErr']);
       //echo "étape unset ";
      }
    }
  }


  if (isset($_POST['firstname'])){
    //echo "étape 5 ";

    if (empty($_POST["firstname"])) {
      $_SESSION['SPARE']['firstnameErr'] = "Veuillez spécifier un prénom";
      //echo "étape 5.1 ";
    } 
    
    else {
    $firstname = valid_donnees($_POST["firstname"]);
      // check if name only contains letters and whitespace
      //echo "étape 5.2 ";

      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $_SESSION['SPARE']['firstnameErr'] = "Seulement des lettres et des espaces sont acceptés";
        //echo "étape 5.3 ";
      }
      else {
        unset($_SESSION['SPARE']['firstnameErr']);
        //echo "étape unset ";
      }
    }
  }

  if (isset($_POST['lastname'])){
    //echo "étape 6 ";

    if (empty($_POST["lastname"])) {
      $_SESSION['SPARE']['lastnameErr'] = "Veuillez spécifier un nom";
      //echo "étape 6.1 ";
    } 
    
    else {
      $firstname = valid_donnees($_POST["lastname"]);
      //echo "étape 6.2 ";
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $_SESSION['SPARE']['lastnameErr'] = "Seulement des lettres et des espaces sont acceptés";
        //echo "étape 6.3 ";
      }
      else {
        unset($_SESSION['SPARE']['lastnameErr']);
        //echo "étape unset ";
      }
    }
  }
  
  if (isset($_POST['email'])){
    //echo "étape 7 ";

    if (empty($_POST["email"])) {
    $_SESSION['SPARE']['emailErr'] = "Veuillez entrer un email";
    //echo "étape 7.1 ";
    } else {
    $email = valid_donnees($_POST["email"]);
    // check if e-mail address is well-formed
    if (in_array($email,$all_user_email)) {
      $_SESSION['SPARE']['emailErr'] = "Email déjà utilisé";
      //echo "étape 7.2 ";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['SPARE']['emailErr'] = "Veuillez entrer une adresse email valide";
      //echo "étape 7.3 ";
  }
    else {
        unset($_SESSION['SPARE']['emailErr']);
        //echo "étape unset ";
      }
    }
  }

  if ((!in_array($email,$all_user_email)) && 
  (((!isset($_SESSION['SPARE']['statutErr'])) && (empty($_SESSION['SPARE']['statutErr']))) 
  && ((!isset($_SESSION['SPARE']['statutErr'])) && (empty($_SESSION['SPARE']['statutErr']))) 
  && ((!isset($_SESSION['SPARE']['classroomErr'])) && (empty($_SESSION['SPARE']['classroomErr']))) 
  && ((!isset($_SESSION['SPARE']['ClassSpeErr'])) && (empty($_SESSION['SPARE']['ClassSpeErr']))) 
  && ((!isset($_SESSION['SPARE']['firstnameErr'])) && (empty($_SESSION['SPARE']['firstnameErr']))) 
  && ((!isset($_SESSION['SPARE']['lastnameErr'])) && (empty($_SESSION['SPARE']['lastnameErr']))) 
  && ((!isset($_SESSION['SPARE']['emailErr'])) && (empty($_SESSION['SPARE']['emailErr']))))) 
  {

    unset($_SESSION['SPARE']['statutErr']);
    unset($_SESSION['SPARE']['classroomErr']);
    unset($_SESSION['SPARE']['ClassSpeErr']);
    unset($_SESSION['SPARE']['firstnameErr']);
    unset($_SESSION['SPARE']['lastnameErr']);
    unset($_SESSION['SPARE']['emailErr']);

    //echo "etape 8 ";
        
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

    $_SESSION['SPARE']['confirm_creation_user']="Utilisateur bien enregistré";
    //echo "etape 8.1 ";
  }

  else {
    $_SESSION['SPARE']['error_creation_user']="Utilisateur non-enregistré";
    //echo "etape 9 ";
  }
  ;
  
  header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
  exit;
  //echo "etape 10 ";
}

