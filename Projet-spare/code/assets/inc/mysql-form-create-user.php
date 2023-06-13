<?php
// require ("creation-user.php");
require_once ("sql-data-base-connexion.php");

$email=$_POST['email']; 
$UserPwd=$_POST['UserPwd']; 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$statut=$_POST['statut']; 
$classroom=$_POST['classroom'];
$ClassSpe=$_POST['ClassSpe']; 

$id=78;

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");



$sqlQuery ='INSERT INTO users (id, email, UserPwd, firstname, lastname, statut, classroom, ClassSpe, CreationAccount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

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
    $CreationAccount=$date 
]);

header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/dashboard.php');

