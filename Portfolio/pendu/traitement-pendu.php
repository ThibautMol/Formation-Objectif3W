<?php
session_start();
?>
<pre><?=var_dump($_SESSION)?></pre>;
<?php
CONST MAX_TRY=11;

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


var_dump($_POST);



if ((isset($_POST['launch_game'])) && (!empty($_POST['launch_game']))) {

    // cette condition permet de lancer la partie et va permettre l'affichage des inputs de saisie des lettres.

    echo " étape 1 ";

    $_SESSION['pendu']['game']['launch_game']=$_POST['launch_game'];

}


if ((!isset($_SESSION['pendu']['game']['word'])) && (empty($_SESSION['pendu']['game']['word']))) {

    // Cette condition va permettre de générer un mot aléatoire en le piochant depuis la base de donnée.
    // Un traitement sera fait sur le mot afin de le stocker tel quel mais aussi de le transformer sans caractères spéciaux pour permettre les comparaisons avec le mot de l'utilisateur ou les lettres.
    // Un split du mot sera fait pour dynamiser l'affichage et permettre une comparaison lettres par lettres avec celles que soumet l'utilisateur.

    echo " étape 2 ";
    $word_to_guess=random_word();

    $_SESSION['pendu']['game']['word_to_guess_without_special_char']=special_char_remplacement($word_to_guess);

    $_SESSION['pendu']['game']['word_to_guess_split']=mb_str_split($word_to_guess,$length = 1, $encoding = null);

    // La variable  $_SESSION['pendu']['game']['word'] stockera à son index 0 et 1 le mot à deviner sous ses deux formes (array and string).

    $_SESSION['pendu']['game']['word'][]=$_SESSION['pendu']['game']['word_to_guess_split'];

    $_SESSION['pendu']['game']['word'][]=str_split($_SESSION['pendu']['game']['word_to_guess_without_special_char']);

    // la variable $_SESSION['pendu']['game']['word_to_guess_string'] permettra une comparaison entre le mot de l'utilisateur et le mot recherché.

    $_SESSION['pendu']['game']['word_to_guess_string']=str_ireplace("-", "",$_SESSION['pendu']['game']['word_to_guess_without_special_char']);

    $_SESSION['pendu']['game']['word_to_guess_string']=str_ireplace(" ", "",$_SESSION['pendu']['game']['word_to_guess_string']);

    $_SESSION['pendu']['game']['word_split_without_spe_char']=mb_str_split($_SESSION['pendu']['game']['word_to_guess_without_special_char'],$length = 1, $encoding = null);

}

if ((isset($_POST['player_letter'])) && (!empty($_POST['player_letter'])) || (isset($_POST['player_word'])) && (!empty($_POST['player_word'])) ) {

    // Cette condition permet d'accéder au coeur du programme. Et évite que les éléments se lancent si $_POST ne comporte rien.

    if (!isset($_SESSION['pendu']['game']['tentatives']) && (empty($_SESSION['pendu']['game']['tentatives']))) {
        $_SESSION['pendu']['game']['tentatives']=0;
    }

    echo " étape 3 ";

    $_POST['player_letter']=strtolower($_POST['player_letter']);

    echo " étape 3.1 ";

    $_POST['player_letter']=special_char_remplacement($_POST['player_letter']);

    echo " étape 3.2 ";


    if ((isset($_POST['player_letter']) && 
    (is_string($_POST['player_letter'])) && 
    (!is_numeric($_POST['player_letter'])) &&
    (strlen($_POST['player_letter']))==1)) {

        // Cette condition permet de ne rentrer que si l'élément proposé ne contient qu'une seule lettre (vérification si l'utilisateur insèrerait plusieurs lettres dans le formulaire ou se tromperait).
        // Ici il y va avoir le coeur du traitement de l'input soumis par l'utilisateur. 

        echo " étape 4 ";


        if ((isset($_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'])) && (in_array($_POST['player_letter'], $_SESSION['pendu']['game']['all_letter_proposed_without_spe_char']))) {

            // Cette condition permet de vérifier si la lettre n'a pas déjà été proposée, si oui, aucune tentative n'est ajoutée.


            $_SESSION['pendu']['game']['error']='Lettre déjà proposée';


        }
        elseif ($_SESSION['pendu']['game']['tentatives']<MAX_TRY) {

            // Si la lettre n'a pas été déjà proposée, alors on rentre dans cette condition

            $_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'][]=special_char_remplacement($_POST['player_letter']);
            
            
            echo " étape 4.5 ";
         
            
            if ((in_array($_POST['player_letter'], $_SESSION['pendu']['game']['word'][1])) && ($_SESSION['pendu']['game']['tentatives']<MAX_TRY)) {

                // Si la lettre est contenue dans le tableau $_SESSION['pendu']['game']['word'][1] (qui contient un tableau avec chacune des lettres isolées) et si le max de tentatives n'est pas dépassé

                echo " étape 5 ";

                $_SESSION['pendu']['game']['letter_guessed'][]=$_POST['player_letter'];
                
                // $_SESSION['pendu']['game']['tentatives']++;

                echo " étape 5.1 ";

                if (isset($_SESSION['pendu']['game']['letter_guessed'])) {

                    // Ici on va boucler sur chacune des lettres du mot sans les caractères spéciaux afin de vérifier si toutes sont comprises dans les lettres devinées par l'utilisateur alors c'est bon. 
                    // Sinon la variable $result sera set. Ce qui empêchera de dire que la partie est remportée.  
                    
                    foreach ($_SESSION['pendu']['game']['word_split_without_spe_char'] as $value) {

                        if (in_array($value,$_SESSION['pendu']['game']['letter_guessed'])) {
                            
                        }
                        else {
                            $result=1;
                        }
                    }

                    if ((!isset($result)) && ($result!=1)) {

                        // Le joueur ne peut gagner que si toutes les lettres du mot sont comprises dans les lettres qu'il a deviné.
                        // Chaque victoire se rajoute dans $_SESSION['pendu']['win'] qui ne sera pas remis à 0 lorsqu'une partie est relancée

                        $_SESSION['pendu']['game']['result']='Vous avez gagné';
                        $_SESSION['pendu']['win']++;

                        echo " étape 5.2 ";
                    }
                }

                unset($_SESSION['pendu']['game']['error']);
                
                echo " étape 5.3 ";
                
            }

            elseif ($_SESSION['pendu']['game']['tentatives']<MAX_TRY){
                
                
                echo " étape 6 ";

                $_SESSION['pendu']['game']['error']="La lettre n'est pas dans le mot";

                $_SESSION['pendu']['game']['tentatives']++;

            }
            
        }else{

             // Chaque défaite se rajoute dans $_SESSION['pendu']['loose'] qui ne sera pas remis à 0 lorsqu'une partie est relancée

            echo " étape 7 ";

            $_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'][]=special_char_remplacement($_POST['player_letter']);

        }
    }
    elseif (((strlen($_POST['player_word']))>2) && (isset($_POST['player_word'])) && (!empty($_POST['player_word']))) {

        // La proposition de mots doit faire minimum 4 caractères afin de composer un mot complet à deviner. 
        // Un traitement va être réalisé sur l'input de l'utilisateur afin de retirer les caractères spéciaux et autres éléments pour la comparaison. 
        
        
        $_player_word=special_char_remplacement($_POST['player_word']);
        $_player_word=str_ireplace("-", "", $_player_word);
        $_SESSION['pendu']['game']['player_word']=str_ireplace(" ", "", $_player_word);
          
        echo " étape 8 "; 


        if ($_SESSION['pendu']['game']['word_to_guess_string']==$_SESSION['pendu']['game']['player_word']) {

            echo " étape 9 "; 

            $_SESSION['pendu']['game']['result']='Vous avez gagné';
            $_SESSION['pendu']['game']['try_words'][]=$_SESSION['pendu']['game']['player_word'];
            $_SESSION['pendu']['win']++;
            

        }elseif ((isset($_SESSION['pendu']['game']['try_words'])) && (in_array($_SESSION['pendu']['game']['player_word'],$_SESSION['pendu']['game']['try_words']))) {

            $_SESSION['pendu']['game']['error']="Mot déjà proposé";

        }
        else {

            echo " étape 10 "; 

            $_SESSION['pendu']['game']['try_words'][]=$_SESSION['pendu']['game']['player_word'];

            $_SESSION['pendu']['game']['tentatives']++;

            $_SESSION['pendu']['game']['error']="Ce n'est pas le bon mot";

        }
        

    }
    else{
        echo " étape 11 ";
        $_SESSION['pendu']['game']['error']="saisie incorrecte";
    }
}

if ((isset($_SESSION['pendu']['game']['tentatives'])) && ($_SESSION['pendu']['game']['tentatives']>=MAX_TRY)) {

    $_SESSION['pendu']['game']['result']='Vous avez perdu';

    $_SESSION['pendu']['loose']++;
    
}

echo " étape 12 ";
header('Location: interface-pendu.php');
exit;


?>