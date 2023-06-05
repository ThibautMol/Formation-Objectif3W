<?php
// require ("creation-user.php");
require_once ("sql-data-base-connexion.php");

$email=$_POST['email']; 
$UserPwd=$_POST['UserPwd']; 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$statut=$_POST['statut']; 
$classroom=$_POST['classroom']; 



$sqlQuery ='INSERT INTO users (email, UserPwd, firstname, lastname, statut, classroom, CreationAccount) VALUES (?, ?, ?, ?, ?, ?, ?)';

$insert_user= $db->prepare($sqlQuery);

$insert_user->execute([
    $email,
    $UserPwd,
    $firstname,
    $lastname,
    $statut,
    $classroom,
   
]);