<?php
  session_start();
  session_destroy();
  header("Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/Nombre-de-jours/nombre-de-jours.php");
  exit;
?>