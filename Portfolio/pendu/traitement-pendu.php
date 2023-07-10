<?php
session_start();



$word_to_guess='bob bib';

$_SESSION['pendu']['word_to_guess_split']=str_split($word_to_guess);

$_POST['player_letter'];

if ((isset($_POST['player_letter']) && 
(is_string($_POST['player_letter'])) && 
(!is_numeric($_POST['player_letter'])) &&
(strlen($_POST['player_letter']))==1)) {

    if (in_array($_POST['player_letter'], $_SESSION['pendu']['word_to_guess_split'])) {
        
        $_SESSION['pendu']['letter_guessed'][]=$_POST['player_letter'];
        
        echo "c'est good";
        header('Location: interface-pendu.php');
        exit;

    }else{

        echo "c'est bad";
    }

}else {
    echo "saisie incorrecte";
}




?>