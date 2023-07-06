<?php
session_start();

if ((isset($_SESSION['SPARE']['errors']))) {
    
    unset($_SESSION['SPARE']['errors']);


header('Location: '.$_SERVER['HTTP_REFERER']);
exit;


}


?>