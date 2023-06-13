<?php
require_once ("sql-data-base-connexion.php");


$request_spe_classes = $db->prepare('SELECT * FROM classes_spe');

$request_spe_classes->execute();

$all_spe_classes = $request_spe_classes->fetchAll(PDO::FETCH_ASSOC);


?>