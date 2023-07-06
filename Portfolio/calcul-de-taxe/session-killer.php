<?php
  session_start();
  session_destroy();
  header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/calcul-de-taxe/calcul-de-taxe.php');
  exit;
?>