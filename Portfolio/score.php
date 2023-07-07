<?php
session_start();
$current_page='score';
$title='Votre Score';
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');


?>


<section class="d-flex flex-wrap justify-content-evenly mt-5">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Loterie</h5>
            <p class="card-text">Votre score est de : </p>
            <a href="#" class="btn btn-primary">J'y retourne!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Devinette</h5>
            <p class="card-text">Votre score est de : </p>
            <a href="#" class="btn btn-primary">J'y retourne!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Quiz Développeur</h5>
            <p class="card-text">Votre score est de : </p>
            <a href="#" class="btn btn-primary">J'y retourne!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Le livre dont vous êtes le héro</h5>
            <p class="card-text">Votre score est de : </p>
            <a href="#" class="btn btn-primary">J'y retourne!</a>
        </div>
    </div>

</section>








<?php require_once ('assets/inc/foot.php');?>