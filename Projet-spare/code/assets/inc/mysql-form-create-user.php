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

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");

$email=$_POST['email']; 
$UserPwd=$_POST['UserPwd']; 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$statut=$_POST['statut']; 
$classroom=$_POST['classroom']; 
$CreationAccount=$date; 


$sqlQuery ='INSERT INTO users (email, UserPwd, firstname, lastname, statut, classroom, CreationAccount) VALUES (?, ?, ?, ?, ?, ?, ?)';

$insert_user= $db->prepare($sqlQuery);

$insert_user->execute([
    $email,
    $UserPwd,
    $firstname,
    $lastname,
    $statut,
    $classroom,
    $CreationAccount
]);

header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/dashboard.php');
