<?php 

function valid_donnees($donnees){
    
    // Cette fonction utilise la variable $donnes qui récupère à chaque get la valeur de la réponse de l'utilisateur.
    // Cette fonction va vérifier, contrôler, et formater les données pour éviter les injections de code.
    // La variable $donnees sera de type string ou int


    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

function confirm_user_answer ($user_answer, $questions) {

    // Cette fonction va vérifier si la réponse donnée par l'utilisateur est bien contenue dans la tableau $questions.
    // La variable $user_answer va être le résultat de la donnée récupérée par le GET et vérifiée par la fonction valid_donnees
    // Si cette dernière n'est pas dedans, un message d'erreur est renvoyé.
    // La variable $user_answer sera de type string ou int
    // La variable $questions est un tableau indexé 
    
    for ($i=0; $i<count($questions); $i++) {
        
        foreach ($questions[$i]['options'] as $choice) {

            if ($user_answer==$choice) {

                unset($_SESSION['quiz']['good_answer']);

                unset($_SESSION['quiz']['errors']);

                $_SESSION['quiz']['good_answer']=1;

                return;
            }
            else {

                if (($i==(count($questions)-1)) && ($_SESSION['quiz']['good_answer']!=1)) {
                    $error_choice="Choix inexistant parmi la liste, veuillez recommencer";
            
                return $error_choice;
                }
            }
        }

    }   
}

function returning_home_because_error($error){

    // Cette fonction va recevoir le message d'erreur généré par la fonction confirm_user_answer.
    // Si ce dernier existe, une redirection sera faite vers la page de principale du quizz.
    // La variable $error sera de type string 

    if ((isset($_GET['user_answers'])) && (!empty($_GET['user_answers']))) {

        unset($_SESSION['quiz']['answers_counting']);
        unset($_SESSION['quiz']['user_score']);
        
        return header('Location: http://localhost/Formation-Objectif3W/PHP/validation/Quiz-Thibaut-Valid/home-quiz.php');
        
    }

}

function checking_user_answer ($user_answer,&$counting_answers,$questions,$question_number,&$user_score) {

    // Cette fonction va recevoir $user_answer après son passage dans les deux dernières fonctions, la variable $counting_answers et $user_score en passage par référérence
    // ainsi que le tableau $questions et la variable $question_number.
    // Elle va déterminer le résultat de la réponse de l'utilisateur et incrémenter son nombre de réponses.
    // Elle va également incrémenter ou pas le score de l'utilisateur.
    // Elle renvoi le résultat de la réponse du joueur.

    $counting_answers++;

    if ($user_answer==$questions[$question_number]['answer']) {

        $user_score++;

        return "Bonne réponse";

    }else {

        return "Mauvaise réponse";
    } 
}


if (isset($_GET['page'])) {

    // La valeur de l'index du tableau $questions est égal à $_GET['page'] afin de permettre de se déplacer dans le tableau.

    $question_number=$_GET['page'];
    settype($question_number, "integer");
}

if ((isset($_GET['user_answers'])) && (!empty($_GET['user_answers']))) {
  
    if ((!isset($_SESSION['quiz']['answers_counting'])) && (empty($_SESSION['quiz']['answers_counting']))){
        $_SESSION['quiz']['answers_counting']=NULL;
    }

    if ((!isset($_SESSION['quiz']['user_score'])) && (empty($_SESSION['quiz']['user_score']))) {
        $_SESSION['quiz']['user_score']=NULL;
    }

    $donnees=$_GET['user_answers'];
    $user_answer=valid_donnees($donnees);

    $_SESSION['quiz']['errors']=confirm_user_answer ($user_answer, $questions);

    $counting_answers=$_SESSION['quiz']['answers_counting'];
    $user_score=$_SESSION['quiz']['user_score'];

    $result=checking_user_answer($user_answer,$counting_answers,$questions,$question_number,$user_score);

    $_SESSION['quiz']['answers_counting']=$counting_answers;
    $_SESSION['quiz']['user_score']=$user_score;
  
}


if (isset($_SESSION['quiz']['errors']) && (!empty($_SESSION['quiz']['errors']))) {

    // S'il existe une erreur stocké dans $_SESSION et si cette erreur correspond au message d'erreur prévu,
    // alors l'utilisateur sera ramené au début et devra recommencer le quiz.
    
    $error=$_SESSION['quiz']['errors'];

    if ($_SESSION['quiz']['errors']=="Choix inexistant parmi la liste, veuillez recommencer") {
    returning_home_because_error($error);}
}





?>