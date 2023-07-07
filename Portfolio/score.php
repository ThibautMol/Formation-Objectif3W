<?php
session_start();
$current_page='score';
$title='Votre Score';
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');


?>


<section class="d-flex flex-wrap justify-content-evenly mt-5">

<p>Créer une bdd dans laquelle l'utilisateur pourra s'enregistrer, consulter son profil, mettre une photo de profil, voir pour sauvegarder son score et faire un classement général entre utilisateurs.
    sauvegarder le score lors du log out en bdd? uniquement si les scores sont set, possibilité de reboot les scores du coup. 
    voir pour l'affichage dynamique de la liste d'utilisateurs et de leur score. ranger l'array au clic. mettre en bleu nom du user.
    Mettre une petite couronne de 3 couleurs pour les 3 premiers.
</p>

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