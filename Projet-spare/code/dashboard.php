<?php session_start(); ?>
<?php $title='Dashboard'?>
<?php require_once ("./assets/inc/head.php") ?>
<?php require_once ("./assets/inc/nav-bar.php") ?>


<main class="" style="margin-top:100px;">
    <h1 class="d-flex justify-content-center">Dashboard<h1>

    <p class="d-flex justify-content-end me-5 text-capitalize font-italic fs-5"> Bonjour <?= $_SESSION['USER_FIRSTNAME']?> <?= $_SESSION['USER_LASTNAME']?>  <?= $_SESSION['USER_ID']?></p>
    









</main>
<?php require_once ("./assets/inc/foot.php") ?>