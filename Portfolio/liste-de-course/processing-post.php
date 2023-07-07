<?php
  session_start();

  $_SESSION['course'][]=$_POST;
 

  header('Location: '.$_SERVER['HTTP_REFERER']);
  exit;
?>