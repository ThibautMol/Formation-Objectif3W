<?php
  session_start();
  session_destroy();
  header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/login.php');
?>