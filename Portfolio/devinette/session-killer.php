<?php
  session_start();
  session_destroy();
  header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/mini-jeu/mini-jeu.php');
  exit;
?>