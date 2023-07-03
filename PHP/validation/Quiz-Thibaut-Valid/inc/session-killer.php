<?php
  session_start();
  unset($_SESSION['quiz']);

  // @Damien pense à modifier le chemin pour que ça fonctionne.
  
  header('Location: http://localhost/Formation-Objectif3W/PHP/validation/Quiz-Thibaut-Valid/home-quiz.php');
  exit;
?>