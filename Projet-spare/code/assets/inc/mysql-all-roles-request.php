<?php
require_once ("sql-data-base-connexion.php");


$request_roles = $db->prepare('SELECT * FROM roles');

$request_roles->execute();

$all_roles = $request_roles->fetchAll(PDO::FETCH_ASSOC);


?>