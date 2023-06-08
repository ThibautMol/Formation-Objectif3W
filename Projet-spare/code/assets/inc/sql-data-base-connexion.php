<?php
try {
    $db= new PDO ("mysql:host=localhost;dbname=spare;charset=UTF8","root","");
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>