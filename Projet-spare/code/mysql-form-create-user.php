<?php
// require ("creation-user.php");
try {
    $db= new PDO (
        'mysql:host=localhost;dbname=spare;charset=UTF8',
        'root', //identifiant connexion BDD
        '' //mdp par défaut BDD
    );
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

var_dump($_POST);
$email=$_POST['email']; 
$UserPwd=$_POST['UserPwd']; 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
// $statu=$_POST['statu']; 
// $classroom=$_POST['classroom']; 
$CreationAccount=$_POST['CreationAccount']; 

$sqlQuery ='INSERT INTO users (email, UserPwd, firstname, lastname, statu, classroom, CreationAccount,LastOnline) VALUES (:email, :UserPwd, :firstname, :lastname, :statu, :classroom, :CreationAccount,?)';

$insert_user= $db ->prepare($sqlQuery);

$insert_user->execute([
    'email'=>$email,
    'UserPwd'=>$UserPwd,
    'firstname'=>$firstname,
    'lastname'=>$lastname,
    // 'statu'=>$classroom,
    // 'classroom'=>$CreationAccount,
    'CreationAcount'=>$CreationAccount
]);


