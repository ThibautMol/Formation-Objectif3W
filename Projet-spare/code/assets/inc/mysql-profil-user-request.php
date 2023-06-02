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


$request_profil_user=$db->prepare('SELECT id, email, UserPwd, firstname, lastname, statut, classroom FROM users');

$request_profil_user->execute();

$all_profil_user=$request_profil_user->fetchAll();

?>