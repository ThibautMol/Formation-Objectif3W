<?php
  session_start();
  // session_destroy();
  unset($_SESSION['quiz']);
  header('Location: http://localhost/Formation-Objectif3W/PHP/validation/v2/home-quiz.php');
  exit;
?>