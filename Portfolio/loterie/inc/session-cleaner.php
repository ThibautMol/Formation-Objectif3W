<?php
  session_start();
  unset($_SESSION['loterie']['game']);
  // session_destroy();
  header('Location: ../interface-loterie.php');
  exit;
?>