<?php
  session_start();

  $_SESSION['course'][]=$_POST;
 

  header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/liste-de-courses.php');
  exit;
?>