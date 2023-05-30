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


$test=$db->prepare('SELECT email FROM users');

$test->execute();

$result=$test->fetchAll();
// var_dump($result);

foreach ($result as $lol) {
    // var_dump($result);
    echo $lol['email'];
}
?>