<?php
session_start();

;
var_dump($_POST['buying_tickets']);
echo $_SESSION['loterie']['user_money']-($_POST['buying_tickets']*2);

require_once "functions.php";


if ((isset($_POST['launch_game'])) && (!isset($_SESSION['loterie']['starting_game']))) {

    $_SESSION['loterie']['game']['starting_game']=$_POST['launch_game'];

    echo "etape 1" . " ";

    header("Location: interface-loterie.php");
    exit;

}
echo "etape 1.5" . " ";

if ((isset($_POST['buying_tickets'])) && (!empty($_POST['buying_tickets'])) && ($_SESSION['loterie']['game']['starting_game']=1)) {

    $user_tickets=buying_tickets();

    if ((!isset($_SESSION['loterie']['game']['user_tickets'])) && (empty($_SESSION['loterie']['game']['user_tickets']))) {
        $_SESSION['loterie']['game']['user_tickets']=$user_tickets;
    } elseif ((isset($user_tickets)) && (!empty($user_tickets))) {
        $_SESSION['loterie']['game']['user_tickets'] = array_merge($_SESSION['loterie']['game']['user_tickets'],$user_tickets);
    }
    
    echo "etape 2" . " ";
    header("Location: interface-loterie.php");
    exit;

}

echo "etape 2.5" . " ";

if ((isset($_POST['tirage'])) && (!empty($_POST['tirage']))) {
    echo "etape 3" . " ";
    $tirage=[];

    $_SESSION['loterie']['game']['tirage']=tirage($tirage=[]);

    result();
    echo "etape 3" . " ";
    header("Location: interface-loterie.php");
    exit;

}

echo "etape 3.5" . " ";













?>