<?php
require_once ("sql-data-base-connexion.php");


$request_user_id = $db->prepare('SELECT id FROM users');

$request_user_id->execute();

$all_user_id = $request_user_id->fetchAll(PDO::FETCH_ASSOC);


?>