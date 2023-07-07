<?php
session_start();
$current_page='calculateurs';
$title='Convertisseur';
require_once ('../assets/inc/head.php');
require_once ('../assets/inc/navbar.php');

?>
    
    
<section class="d-flex flex-column justify-content-center mt-5 container-sm">
    
    <div class="d-flex">
        <div class="card me-5 mx-auto h-25" style="width: 18rem;">
            <img class="card-img-top img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1-Z1ZWhfDDr3FsheN4dyJadiPTGMfsvXDpw&usqp=CAU" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-3">Convertisseur chiffre romains/chiffres arabes</h5>
                <form class="d-flex flex-column justify-content-center" action="convert-page.php" method="POST">
            
                    <input class="form-control" type="text" name="element_to_convert" placeholder="Elément à convertir">
                    <button class="btn btn-primary mt-3 mx-auto" type="submit">Convertir</button>

                </form>
            </div>
        </div>

        <div class="card ms-5 mx-auto" style="width: 18rem;">
            <img class="card-img-top img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/2/28/Rome-_Ruins_of_the_Forum%2C_Looking_towards_the_Capitol.jpg" alt="Card image cap">
            <div class="card-body">
                <h2>Historique</h2>
                <?php if (isset($_SESSION['convertisseur'])) :?>
                    <?php foreach ($_SESSION['convertisseur']['historic'] as $history) :?>
                        <p class="card-text">L'élement envoyé était <?=$history[1]?> et le résultat était <?=$history[0]?> </p>
                    <?php endforeach?>
                <?php endif?>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-danger mt-3 text-decoration-none" href="<?=(!isset($_SESSION['convertisseur'])) ? "" : "../assets/session-killer.php"?>">Reset</a>
    </div>

</section>


<?php require_once ('../assets/inc/foot.php');?>
