<?php 
session_start();
$current_page='home';
$title='home';
require_once ('assets/functions.php');
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');

?>

<section class="mt-5">


    <div class="container-sm p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-center">Thibaut Molinié Développeur Web et Web-Mobile</h1>
            <p class="col-md-8 fs-4 text-center">Qui suis-je?</p>
        
        </div>
    </div>


    <section class="container-sm p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3 class="display-5 fw-bold text-center">Un peu de moi</h3>
                <p>description du perso</p>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Mes passions</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Mes hobbies</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">    
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3 class="text-center">Passé</h3>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Parcour universitaire</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Parcour professionnel</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">    
                <h3 class="text-center">Présent</h3>
            </div>

            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Parcour de formation</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">En institut de formation</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">En autonomie</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="card" style="width: 50rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Parcour professionnel</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">    
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3 class="text-center">Futur</h3>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Les envies de formations</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Objectifs professionnels</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">    
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3 class="text-center">Et les skills dans tout ça?</h3>
            </div>

            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Les Softskills</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Les Hardskills</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




</section>

















<?php require_once ('assets/inc/foot.php');?>