<?php

try {
    $db= new PDO (
        'mysql:host=localhost;dbname=spare;charset=UTF8',
        'root', //identifiant connexion BDD
        '' //mdp par défaut BDD
    );
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$request_login=$db->prepare('SELECT email, UserPwd, firstname FROM users');

$request_login->execute();

$login_selection=$request_login->fetchAll();

?>