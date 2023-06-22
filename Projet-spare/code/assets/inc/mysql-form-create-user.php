<?php
session_start();

require_once ("sql-data-base-connexion.php");
require_once ("mysql-profil-user-id-email-request.php");
require_once ("mysql-all-spe-classes-request.php");
require_once ("mysql-all-roles-request.php");
require_once ("mysql-all-main-classes-request.php");
require_once ("../functions/valid-donnees.php");
require_once ("../functions/password-generator.php");

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

  require_once ("../functions/form-error-checking.php");

  if ((!in_array($email,$all_user_email)) && 
  (((!isset($_SESSION['SPARE']['errors'])) && (empty($_SESSION['SPARE']['errors']))))) 
  {

    unset($_SESSION['SPARE']['errors']);

    // echo "etape 8 ";
        
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

    $_SESSION['SPARE']['errors']['confirm_creation_user']="Utilisateur bien enregistré";
    //echo "etape 8.1 ";
  }

  else {
    $_SESSION['SPARE']['errors']['error_creation_user']="Utilisateur non-enregistré";
    //echo "etape 9 ";
  }
  
  
  header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
  exit;
  //echo "etape 10 ";
}

