<?php 




function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlentities($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}


function confirm_user_answer ($user_answer, $questions) {

    for ($i=0; $i<count($questions); $i++) {
        foreach ($questions[$i]['options'] as $choice) {

            if ($user_answer==$choice) {
                return;
            }
            else {
                $error_choice="choix inexistant parmi la liste";
                return $error_choice;
            }
        }

    }   
}

function returning_home_because_error($error){

    if ((isset($_GET['page'])) && (!empty($_GET['page'])) || ((isset($_GET['user_answers'])) && (!empty($_GET['user_answers'])))) {
        
        return header('Location: http://localhost/Formation-Objectif3W/PHP/validation/v2/home-quiz.php');
        
    }

}

if ((isset($_GET['user_answers'])) && (!empty($_GET['user_answers']))) {
    $donnees=$_GET['user_answers'];
    $user_answer=valid_donnees($donnees);

    $_SESSION['quiz']['errors']=confirm_user_answer ($user_answer, $questions);
}


if (isset($_SESSION['quiz']['errors']) && (!empty($_SESSION['quiz']['errors']))) {
    
    $error=$_SESSION['quiz']['errors'];

    if ($_SESSION['quiz']['errors']=="choix inexistant parmi la liste") {
    returning_home_because_error($error);}
}



(isset($_GET['start']) && (!empty($_GET['start'])) && ($_GET['start']==1)) ? $_SESSION['quiz']['set']=$_GET['start'] : "";

(!isset($_SESSION['quiz']['number_of_question_answered']) && (empty($_SESSION['quiz']['number_of_question_answered']))) ? $_SESSION['quiz']['number_of_question_answered']=0 : "";

if (isset($_GET['page'])) {
$question_number=$_GET['page'];
settype($question_number, "integer");
}



if ((isset($_GET['user_answers'])) && (!empty($_GET['user_answers']))) {

    $_SESSION['quiz']['answers_counting']++;

    if ($_GET['user_answers']==$questions[$question_number]['answer']) {
        $result="Bonne réponse";
        $_SESSION['quiz']['user_score']++;
    }else {
        $result="Mauvaise réponse";
    }
} 
// else {
//     $_SESSION['quiz']['answers_counting']=NULL;
//     $_SESSION['quiz']['user_score']=NULL;
// }


?>