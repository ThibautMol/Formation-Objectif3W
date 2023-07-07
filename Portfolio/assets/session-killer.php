<?php
    session_start();

    //passer tout en switch

    if (stristr($_SERVER['HTTP_REFERER'],'liste-de-course/liste-de-courses.php')) {
        unset($_SESSION['course']);
    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'calcul-de-taxe.php')){ 
        unset($_SESSION['calcul-taxe']);
        
    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'convertisseur-numerique.php')){ 
        unset($_SESSION['convertisseur']);
    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'nombre-de-jours.php')){ 
        unset($_SESSION['calendar']);
    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'interface-loterie.php')){ 
        unset($_SESSION['loterie']);
    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'devinette.php')){ 
        unset($_SESSION['guessing_game']);
    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'home-quiz.php')){ 
        
        unset($_SESSION['quiz']);

        if ((stristr($_SERVER['HTTP_REFERER'],'page='))){
            header('Location: http://localhost/Formation-Objectif3W/Portfolio/quiz/home-quiz.php');
            exit;
        }
    
    }
    else {
    session_destroy();}

    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit;
?>
