<?php

try {
    $db= new PDO ("mysql:host=localhost;dbname=spare;charset=UTF8","root","");
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$request_spe_classes = $db->prepare('SELECT * FROM classes_spe');

$request_spe_classes->execute();

$all_spe_classes = $request_spe_classes->fetchAll(PDO::FETCH_ASSOC);


?>