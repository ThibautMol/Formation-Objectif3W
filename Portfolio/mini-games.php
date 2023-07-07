<?php
session_start();
$current_page='mini-jeux';
$title='Mini-jeux';
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');

?>

<section class="d-flex flex-wrap justify-content-evenly mt-5">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Loterie</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="loterie/interface-loterie.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Devinette</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="devinette/devinette.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Quiz Développeur</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="quiz/home-quiz.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Le livre dont vous êtes le héro</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="livre-dont-vous-etes-le-hero/interface-story.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

</section>


<?php require_once ('assets/inc/foot.php');?>















<?php require_once ('assets/inc/foot.php');?>




