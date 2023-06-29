<?php session_start();?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <title>Calcul du nombre de jours</title>
    </head>

    
    
    <body class="d-flex flex-column justify-content-center mt-5 container-sm">
        
        <div class="d-flex">
            <div class="card mx-auto h-25" style="width: 25rem;">
                <img class="card-img-top img-thumbnail" src="https://m.media-amazon.com/images/I/A1eelu7a79L._AC_UF1000,1000_QL80_.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Choisissez votre date</h5>
                    <form class="d-flex flex-column justify-content-center" action="calcul-nombre-jours-v2.php" method="POST">
                        
                    <label for="start">Date de départ</label>
                        <input type="date" id="start" name="trip-start">

                        <label for="end">Date de fin</label>
                        <input type="date" id="end" name="trip-end">
                        <button class="btn btn-primary mt-3 mx-auto" type="submit">Calculer</button>

                    </form>

                    <?php if (isset($_SESSION['convertisseur'])) :?>
                            <p class="card-text">Le nombre de jours est de : <?='';?> </p>
                    <?php endif?>
                </div>
            </div>
        </div>
    
        <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-danger mt-3 text-decoration-none" href="session-killer.php">Reset</a>
        </div>
    
    </body>


</html>