<?php

require_once ("sql-data-base-connexion.php");
require_once("mysql-profil-user-id-request.php");



if (isset($_POST['email'])) {

    $email=$_POST['email']; 
    // $UserPwd=$_POST['UserPwd']; 
    $firstname=$_POST['firstname']; 
    $lastname=$_POST['lastname']; 
    $statut=$_POST['statut']; 
    $classroom=$_POST['classroom'];
    $ClassSpe=$_POST['ClassSpe']; 
    
   
    
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

    }while(in_array($id,$all_user_id));


    function mdp_generator ($firstname, $lastname) {
        $UserPwd=substr($firstname, 0 , 1).$lastname; 
        return $UserPwd;
    }

    $UserPwd=mdp_generator($firstname,$lastname);
    
    $first_visit=NULL;

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
}
