<?php
session_start();

require_once ("sql-data-base-connexion.php");
require_once("mysql-profil-user-id-email-request.php");
// var_dump($_POST);

if (!empty($_POST['email'])) {
    // echo "etape un ";
    $email=strtolower($_POST['email']); 
    $firstname=strtolower($_POST['firstname']); 
    $lastname=strtolower($_POST['lastname']); 
    $statut=strtolower($_POST['statut']); 
    $classroom=strtolower($_POST['classroom']);
    $ClassSpe=strtolower($_POST['ClassSpe']); 

    var_dump(!in_array($email,$all_user_id_email));
    var_dump($email);
    // var_dump($all_user_id_email);
    foreach ($all_user_id_email as $element) {
        if ($email===$element['email']) {
            echo $email;
        }
        else {
            echo "pas trouvé ";
        }
    }
        
    if (!in_array($email,$all_user_id_email)) { #ATTENTION FONCTION INVERSEE SINON NE DONNE PAS LE BON RESULTAT BOOL
        //echo "on enregistre ";
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

        do{
        
            $id=generating_id($data = null);

        }while(in_array($id,$all_user_id_email));


        function mdp_generator ($firstname, $lastname) {
            $UserPwd=substr($firstname, 0 , 1).$lastname; 
            return $UserPwd;
        }

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

        unset($_SESSION['roleErr']);
        unset($_SESSION['classroomErr']);
        unset($_SESSION['ClassSpeErr']);
        unset($_SESSION['firstnameErr']);
        unset($_SESSION['lastnameErr']);
        unset($_SESSION['emailErr']);
        
    
        $_SESSION['confirm_creation_user']="Utilisateur bien enregistré";
        //echo "etape 1.5 ";
    }

    else {
        //echo "c'est le même";
        $_SESSION['error_creation_user']="Email déjà utilisé";
        //echo "etape2 ";
    }
   ;
    
    // header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/creation-user.php');
    // exit;
 //echo "etape3 ";
}
//echo "etape4 ";