<?php
try {
    $db= new PDO ("mysql:host=localhost;dbname=spare;charset=UTF8","root","");
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$request_main_classes = $db->prepare('SELECT * FROM classes_principales');

$request_main_classes->execute();

$all_main_classes = $request_main_classes->fetchAll(PDO::FETCH_ASSOC);


?>