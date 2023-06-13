<?php
require_once ("sql-data-base-connexion.php");


$request_main_classes = $db->prepare('SELECT * FROM classes_principales');

$request_main_classes->execute();

$all_main_classes = $request_main_classes->fetchAll(PDO::FETCH_ASSOC);


?>