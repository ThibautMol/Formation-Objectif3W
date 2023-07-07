<?php
  session_start();
  unset($_SESSION['quiz']);  
  header('Location: ../home-quiz.php');
  exit;
?>