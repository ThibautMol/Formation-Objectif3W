<?php session_start(); ?>
<?php require_once ("./assets/functions/auto-return-login-if-not-logged.php") ?>
<?php require_once ("./assets/functions/auto-return-and-logoff-if-first-visit.php") ?>
<?php $title='Dashboard'?>
<?php require_once ("./assets/inc/head.php") ?>
<?php require_once ("./assets/inc/nav-bar.php") ?>



<main class="" style="margin-top:100px;">
    <h1 class="d-flex justify-content-center">Dashboard<h1>

    <p class="d-flex justify-content-end me-5 text-capitalize font-italic fs-5"> Bonjour <?= $_SESSION['SPARE']['USER_FIRSTNAME']?> <?= $_SESSION['SPARE']['USER_LASTNAME']?></p>
    









</main>
<?php require_once ("./assets/inc/foot.php") ?>