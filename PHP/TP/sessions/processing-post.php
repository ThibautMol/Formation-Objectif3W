<?php
  session_start();

  $_SESSION['course'][]=$_POST;
  // $_SESSION['course']['counting']=settype($_SESSION['course']['counting'],"integer")+1;

  header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/liste-de-courses.php');
  exit;
?>