<?php session_start();?>

<?php

$_SESSION['calcul']=0;

if (isset($_POST['number_to_cover'])) {
    
    $elements=str_split($_POST['number_to_cover']);

    foreach($elements as $element) {
        foreach ($letters_to_numbers as $letter) {
            if ($element===$letter['letter']) {
                $_SESSION['calcul']+=$letter['number'];
            }
        }
    }
    $letters_to_numbers= array(
        array('letter'=>'m', 'number'=>1000),
        array('letter'=>'d','number'=>500),
        array('letter'=>'c', 'number'=>100),
        array('letter'=>'l', 'number'=>50),
        array('letter'=>'x', 'number'=>10),
        array('letter'=>'v', 'number'=>5),
        array('letter'=>'i', 'number'=>1)
    );

    // if (is_numeric()) {

    // }
    // else {

    // }

}
?>

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
        <div class="d-flex gap-5 justify-content-center">
        <spe><?=var_dump($_POST['number_to_cover'])?></spe>
        <spe><?=var_dump($elements)?></spe>
        <spe><?=var_dump($letters_to_numbers)?></spe>

        </div>
      

        <form class="mx-auto" action="" method="POST">
            
            <input type="text" name="number_to_cover" placeholder="Elément à convertir">
            <button class="btn btn-primary" type="submit">Convertir</button>

        </form>

        <button class="btn btn-danger mx-auto"><a class="text-primary text-decoration-none" href="session-killer.php">Reset</a></button>

    </body>


</html>
