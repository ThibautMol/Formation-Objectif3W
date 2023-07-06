<?php 
session_start();
$current_page='home';
$title='home';
require_once ('assets/inc/head.php');
require_once ('assets/inc/navbar.php');

?>

<main class="mt-5">


    <div class="container-sm p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Thibaut Molinié Développeur Web et Web-Mobile</h1>
            <p class="col-md-8 fs-4">Qui suis-je?</p>
        
        </div>
    </div>


    <section class="container-sm p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3 class="display-5 fw-bold">Un peu de moi</h3>
                <p>description du perso</p>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Mes passions</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Mes hobbies</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">    
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3>Passé</h3>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Parcour universitaire</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Parcour professionnel</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">    
                <h3>Présent</h3>
            </div>

        <div class="d-flex justify-content-evenly">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Parcour de formation</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">En institut de formation</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">En autonomie</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="card" style="width: 50rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Parcour professionnel</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                </div>
            </div>
        </div>

    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">    
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3>Futur</h3>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Les envies de formations</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Objectifs professionnels</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-sm p-5 mb-4 bg-light rounded-3">    
        <div class="container-fluid py-5">
            <div class="d-flex flex-column ">
                <h3>Et les skills dans tout ça?</h3>
            </div>

            <div class="d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Les Softskills</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Les Hardskills</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, atque. Nam tempore provident commodi! Commodi voluptates consequatur culpa, exercitationem, saepe soluta, quo assumenda nesciunt aut iure accusamus id in fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>

















<?php require_once ('assets/inc/foot.php');?>