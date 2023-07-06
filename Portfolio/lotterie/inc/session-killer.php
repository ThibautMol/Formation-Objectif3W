<?php
  session_start();
  unset($_SESSION['loterie']);
  // session_destroy();
  header('Location: ../interface-loterie.php');
  exit;
?>