<?php
session_start();
$current_page='calculateurs';
$title='Calcul du nombre de jours';
require_once ('../assets/functions.php');
require_once ('../assets/inc/head.php');
require_once ('../assets/inc/navbar.php');



?>


    
    
<section class="d-flex flex-column justify-content-center mt-5 container-sm">
    
    <div class="d-flex">
        <div class="card mx-auto h-25" style="width: 25rem;">
            <img class="card-img-top img-thumbnail" src="https://m.media-amazon.com/images/I/A1eelu7a79L._AC_UF1000,1000_QL80_.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-3">Choisissez votre date</h5>
                <form class="d-flex flex-column justify-content-center" action="calcul-nombre-jours-v2.php" method="POST">
                    
                <label for="start">Date de départ</label>
                    <input type="date" id="start" name="trip-start" value="<?=(isset($_SESSION['calendar']['date_start'])) ? $_SESSION['calendar']['date_start'] : ""?>">
                    
                    <label for="end">Date de fin</label>
                    <input type="date" id="end" name="trip-end" value="<?=(isset($_SESSION['calendar']['date_end'])) ? $_SESSION['calendar']['date_end'] : ""?>">
                    <button class="btn btn-primary mt-3 mx-auto" type="submit">Calculer</button>

                </form>

                <?php if (isset($_SESSION['calendar']['number_of_days'])) :?>
                        <p class="card-text">Le nombre de jours est de : <?=$_SESSION['calendar']['number_of_days'];?> </p>
                <?php endif?>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-danger mt-3 text-decoration-none" href="<?=(!isset($_SESSION['calendar'])) ? "" : "../assets/session-killer.php"?>">Reset</a>
    </div>

</section>


<?php require_once ('../assets/inc/foot.php');?>