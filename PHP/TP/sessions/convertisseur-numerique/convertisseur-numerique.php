<?php session_start();?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <title>Convertisseur</title>
    </head>

    
    
    <body class="d-flex flex-column justify-content-center mt-5 container-sm">
        
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
            <a class="btn btn-danger mt-3 text-decoration-none" href="session-killer.php">Reset</a>
        </div>
    
    </body>


</html>
