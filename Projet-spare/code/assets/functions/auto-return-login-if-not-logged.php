<?php

//this script will return to the logging page if the user is not logged and if it is his first visit and he is trying to access the other pages by entering them into the URL

if (((isset($_SESSION['SPARE']['USER_ID'])) && (empty($_SESSION['SPARE']['USER_ID']))) || 
((!isset($_SESSION['SPARE']['USER_ID'])) || (empty($_SESSION['SPARE']['USER_ID'])))) {

    header('Location: login.php');
    exit;

}

if (((isset($_SESSION['SPARE']['FIRST_VISIT'])) && ($_SESSION['SPARE']['FIRST_VISIT']==0)) || (!isset($_SESSION['SPARE']['FIRST_VISIT'])) || (empty($_SESSION['SPARE']['FIRST_VISIT']))) {

    session_destroy();

    header('Location: login.php');
    exit;

}

?>