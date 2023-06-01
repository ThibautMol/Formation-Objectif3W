<?php session_start(); ?>
<?php $title='Dashboard'?>
<?php require_once ("./assets/inc/head.php") ?>
<?php require_once ("./assets/inc/nav-bar.php") ?>


<main class="" style="margin-top:100px;">
    <h1 class="d-flex justify-content-center">Dashboard<h1>

    <p> Bonjour <?= $_SESSION['LOGGED_USER']?></p>
    









</main>
<?php require_once ("./assets/inc/foot.php") ?>