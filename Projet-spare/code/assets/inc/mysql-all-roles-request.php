<?php

try {
    $db= new PDO ("mysql:host=localhost;dbname=spare;charset=UTF8","root","");
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$request_roles = $db->prepare('SELECT * FROM roles');

$request_roles->execute();

$all_roles = $request_roles->fetchAll(PDO::FETCH_ASSOC);


?>