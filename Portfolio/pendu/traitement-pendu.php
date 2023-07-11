<?php
session_start();
?>
<pre><?=var_dump($_SESSION)?></pre>;
<?php
CONST MAX_TRY=8;

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

    $_SESSION['pendu']['game']['tentatives']=0;

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





if ((isset($_POST['launch_game'])) && (!empty($_POST['launch_game']))) {

    echo " étape 1 ";

    $_SESSION['pendu']['game']['launch_game']=$_POST['launch_game'];

}


if ((!isset($_SESSION['pendu']['game']['word'])) && (empty($_SESSION['pendu']['game']['word']))) {

    echo " étape 2 ";
    $word_to_guess=random_word();

    $_SESSION['pendu']['game']['word_to_guess_without_special_char']=special_char_remplacement($word_to_guess);

    $_SESSION['pendu']['game']['word_to_guess_split']=mb_str_split($word_to_guess,$length = 1, $encoding = null);

    $_SESSION['pendu']['game']['word'][]=$_SESSION['pendu']['game']['word_to_guess_split'];

    $_SESSION['pendu']['game']['word'][]=str_split($_SESSION['pendu']['game']['word_to_guess_without_special_char']);

    $_SESSION['pendu']['game']['word_to_guess_string']=str_ireplace("-", "",$word_to_guess);
    $_SESSION['pendu']['game']['word_to_guess_string']=str_ireplace(" ", "",$_SESSION['pendu']['game']['word_to_guess_string']);


    $word_without_spe_char=special_char_remplacement($_SESSION['pendu']['game']['word_to_guess_string']);

    $_SESSION['pendu']['game']['word_split_without_spe_char']=mb_str_split($word_without_spe_char,$length = 1, $encoding = null);


}

if ((isset($_POST['player_letter'])) && (!empty($_POST['player_letter']))) {

    if (!isset($_SESSION['pendu']['game']['tentatives']) && (empty($_SESSION['pendu']['game']['tentatives']))) {
        $_SESSION['pendu']['game']['tentatives']=0;
    }

    echo " étape 3 ";

    
    $_POST['player_letter']=strtolower($_POST['player_letter']);

    echo " étape 3.1 ";

    $_POST['player_letter']=special_char_remplacement($_POST['player_letter']);

    echo " étape 3.2 ";

    


    echo " étape 3.3 ";


    if ((isset($_POST['player_letter']) && 
    (is_string($_POST['player_letter'])) && 
    (!is_numeric($_POST['player_letter'])) &&
    (strlen($_POST['player_letter']))==1)) {

        echo " étape 4 ";
        // $_SESSION['pendu']['game']['tentatives']++;

        if ((isset($_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'])) && (in_array($_POST['player_letter'], $_SESSION['pendu']['game']['all_letter_proposed_without_spe_char']))) {

            $_SESSION['pendu']['game']['error']='Lettre déjà proposée';

            //$_SESSION['pendu']['game']['tentatives']--;
        }
        else{

            $_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'][]=special_char_remplacement($_POST['player_letter']);
            
            if ((in_array($_POST['player_letter'], $_SESSION['pendu']['game']['word'][1])) && ($_SESSION['pendu']['game']['tentatives']<=MAX_TRY)) {

                echo " étape 5 ";

                $_SESSION['pendu']['game']['letter_guessed'][]=$_POST['player_letter'];

                $_SESSION['pendu']['game']['letter_guessed_string'].=$_POST['player_letter'];
                
                $_SESSION['pendu']['game']['tentatives']++;

                echo " étape 5.1 ";

                // if (isset($_SESSION['pendu']['game']['letter_guessed_string'])) {
                if (isset($_SESSION['pendu']['game']['letter_guessed'])) {

                    // if ((strlen($_SESSION['pendu']['game']['letter_guessed_string']))==(strlen($_SESSION['pendu']['game']['word_to_guess_string']))) {
                    
                    //     $_SESSION['pendu']['game']['result']='win';

                    //     echo " étape 5.2 ";
                    // }

                    
                    foreach ($_SESSION['pendu']['game']['word_split_without_spe_char'] as $value) {
                        if (in_array($value,$_SESSION['pendu']['game']['letter_guessed'])) {
                            
                        }
                        else {
                            $result=1;
                        }
                    }

                    if ((!isset($result)) && ($result!=1)) {

                        $_SESSION['pendu']['game']['result']='Vous avez gagné';

                        echo " étape 5.2 ";
                    }else {
                        echo " pass ";
                    }

                }

                unset($_SESSION['pendu']['game']['error']);
                
                echo " étape 5.3 ";

                header('Location: interface-pendu.php');
                exit;
            }

            elseif ($_SESSION['pendu']['game']['tentatives']<=MAX_TRY){
                
                $_SESSION['pendu']['game']['tentatives']++;
                
                echo " étape 6 ";

                $_SESSION['pendu']['game']['error']="la lettre n'est pas dans le mot";
                header('Location: interface-pendu.php');
                exit;
            }
            else{

                echo " étape 7 ";
                $_SESSION['pendu']['game']['result']='Vous avez perdu';
                header('Location: interface-pendu.php');
                exit;
            }
        }
    }else {
        echo " étape 8 ";
        $_SESSION['pendu']['game']['error']="saisie incorrecte";
    }
}

echo " étape 9 ";
header('Location: interface-pendu.php');
exit;


?>