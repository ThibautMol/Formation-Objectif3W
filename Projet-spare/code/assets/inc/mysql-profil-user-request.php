<?php
require_once ("sql-data-base-connexion.php");


$request_profil_user = $db->prepare('SELECT * FROM users');

$request_profil_user->execute();

$all_profil_user = $request_profil_user->fetchAll(PDO::FETCH_ASSOC);


?>