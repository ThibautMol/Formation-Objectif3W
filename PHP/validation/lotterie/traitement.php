<?php
session_start();

require_once "functions.php";


if ((isset($_POST['launch_game'])) && (!isset($_SESSION['loterie']['starting_game']))) {
    echo "étape 1";

    $_SESSION['loterie']['starting_game']=$_POST['launch_game'];

    header("Location: interface-loterie.php");
    exit;

}


if ((isset($_POST['buying_tickets'])) && (!empty($_POST['buying_tickets'])) && ($_SESSION['loterie']['starting_game']=1)) {

    $user_tickets=buying_tickets();

}


if ((isset($_POST['tirage'])) && (!empty($_POST['tirage']))) {

    $tirage=[];

    $_SESSION['loterie']['tirage']=tirage($tirage=[]);

    header("Location: interface-loterie.php");
    exit;

}


// faire deux valeurs pour les tickets, une valeur temporaire pour afficher ceux qu'on vient d'acheter, et la totalité des tickets avec un merge des deux array








?>