<?php
session_start();

CONST MAX_TRY=10;

function all_words_query () {
    try {
        $db= new PDO ("mysql:host=localhost;dbname=portfolio;charset=UTF8","root","");
    }
    
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
        $all_words=$db->prepare('SELECT * FROM mini_game_pendu');
    
        $all_words->execute();
    
        $all_words_selection=$all_words->fetchAll(PDO::FETCH_ASSOC);
    return $all_words_selection;    
}

function random_word (){

    $all_word_selection=all_words_query();

    $index=random_int(0,(count($all_word_selection)));

    $word_to_guess=$all_word_selection[$index]['word'];

    $_SESSION['pendu']['tentatives']=0;

    return $word_to_guess;
}

function special_char_remplacement ($donnee) { 


    $example_a=["à","â","ä"];
    $example_e=["é","ê","ë","è"];
    $example_i=["ï","î"];
    $example_o=["ô","ö"];
    $example_u=["û","ü","ù"];
    $example_c=["ç"];

    $donnee=str_ireplace($example_a, "a", $donnee);

    $donnee=str_ireplace($example_e, "e", $donnee);

    $donnee=str_ireplace($example_i, "i", $donnee);

    $donnee=str_ireplace($example_o, "o", $donnee);

    $donnee=str_ireplace($example_u, "u", $donnee);

    $donnee=str_ireplace($example_c, "c", $donnee);

    return $donnee;

}

if ((!isset($_SESSION['pendu']['word'])) && (empty($_SESSION['pendu']['word']))) {

    $word_to_guess=random_word();


}

$_SESSION['pendu']['word_to_guess_without_special_char']=special_char_remplacement($word_to_guess);

$_POST['player_letter']=strtolower($_POST['player_letter']);

$_POST['player_letter']=special_char_remplacement($_POST['player_letter']);

$_SESSION['pendu']['word_to_guess_split']=mb_str_split($word_to_guess,$length = 1, $encoding = null);

$_SESSION['pendu']['letter_guessed_without_special_char']=special_char_remplacement($_POST['player_letter']);

$_SESSION['pendu']['word'][]=$_SESSION['pendu']['word_to_guess_split'];

$_SESSION['pendu']['word'][]=str_split($_SESSION['pendu']['word_to_guess_without_special_char']);


if ((isset($_POST['player_letter']) && 
(is_string($_POST['player_letter'])) && 
(!is_numeric($_POST['player_letter'])) &&
(strlen($_POST['player_letter']))==1)) {


    $_SESSION['pendu']['tentatives']++;
   

    if ((in_array($_POST['player_letter'], $_SESSION['pendu']['word'][1])) && ($_SESSION['pendu']['tentatives']<=MAX_TRY)) {

        $_SESSION['pendu']['letter_guessed'][]=$_POST['player_letter'];

        $_SESSION['pendu']['letter_guessed_string'].=$_POST['player_letter'];
        $_SESSION['pendu']['word_to_guess_string']=$word_to_guess;

        if ((count($_SESSION['pendu']['letter_guessed_string']))==(count($_SESSION['pendu']['word_to_guess_string']))) {
            
            $_SESSION['pendu']['result']='win';

        }

        unset($_SESSION['pendu']['error']);
        
        
        header('Location: interface-pendu.php');
        exit;
    }

    elseif ($_SESSION['pendu']['tentatives']<=MAX_TRY){
        $_SESSION['pendu']['error']="la lettre n'est pas dans le mot";
        header('Location: interface-pendu.php');
        exit;
    }
    else{
        $_SESSION['pendu']['result']='loose';
        header('Location: interface-pendu.php');
        exit;
    }

}else {

    $_SESSION['pendu']['error']="saisie incorrecte";
}


?>