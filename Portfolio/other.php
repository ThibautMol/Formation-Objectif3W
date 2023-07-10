<?php
session_start();
$current_page='autres';
$title='Autres';
require_once ('assets/functions.php');
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');



?>


<section class="d-flex flex-wrap justify-content-evenly mt-5">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Liste de course</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="liste-de-course/liste-de-courses.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Recherche de livres et d'auteurs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="recherche-d'auteurs/exercice-affichage-recherche-auteur.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Programme de sport</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="recherche-d'auteurs/exercice-affichage-recherche-auteur.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

</section>

















<?php require_once ('assets/inc/foot.php');?>
