<?php
session_start();
$current_page='calculateurs';
$title='Calculateurs';
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');



?>

<section class="d-flex flex-wrap justify-content-evenly mt-5">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Calcul de TVA</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="calcul-de-taxe/calcul-de-taxe.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Convertisseur chiffres Romains et Arabes</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="convertisseur-numerique/convertisseur-numerique.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Calcul du Nombre de jours</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="Nombre-de-jours/nombre-de-jours.php" class="btn btn-primary">Play!</a>
        </div>
    </div>

</section>






<?php require_once ('assets/inc/foot.php');?>