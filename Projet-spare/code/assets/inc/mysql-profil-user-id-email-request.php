<?php
require_once ("sql-data-base-connexion.php");


$request_user_id_email = $db->prepare('SELECT id, email FROM users');

$request_user_id_email->execute();

$all_user_id_email = $request_user_id_email->fetchAll(PDO::FETCH_ASSOC);


?>