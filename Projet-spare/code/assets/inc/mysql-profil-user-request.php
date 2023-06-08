<?php
require_once ("sql-data-base-connexion.php");


$request_profil_user=$db->prepare('SELECT id, email, UserPwd, firstname, lastname, statut, classroom, ClassSpe, CreationAccount FROM users');

$request_profil_user->execute();

$all_profil_user=$request_profil_user->fetchAll();

?>