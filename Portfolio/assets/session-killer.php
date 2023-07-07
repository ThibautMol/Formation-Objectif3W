<?php
    session_start();

    if (stristr($_SERVER['HTTP_REFERER'],'liste-de-course/liste-de-courses.php')) {
        unset($_SESSION['course']);

    }
    elseif (stristr($_SERVER['HTTP_REFERER'],'calcul-de-taxe.php')){ 
        unset($_SESSION['calcul-taxe']);
    }
    else {
    session_destroy();}

    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit;
?>
