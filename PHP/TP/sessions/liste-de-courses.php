<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <title>liste de courses</title>
</head>
<pre><?=var_dump($_data['id'])?><pre>
<pre><?=var_dump($_SESSION['course'])?><pre>
    
    <body class="d-flex flex-column justify-content-center mt-5">

        <form class="d-flex flex-column justify-content-center mt-3" action='processing-post.php' method="POST">
            <div class="form-row d-grid gap-3">
            <div class="m-auto d-none">
                    <input type="text" class="form-control" name="id" id="id" value="<?=(!empty($_SESSION['course'])) ? count($_SESSION['course']) : "0" ?>" > 
                </div>
                <div class="m-auto">
                    <label class="text-capitalize" for="product_name">Produit</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" > 
                </div>
                <div class="m-auto">
                    <label class="text-capitalize" for="quantity">Quantité</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" > 
                </div>
            </div>

            <div class="m-auto">
                <button class="btn btn-primary mt-3 text-capitalize" type="submit" href="#">valider</button>
            </div>
            
        </form>
        

        <h2 class="m-auto mt-3">Liste des courses</h2>
        <form class="d-flex flex-column justify-content-center mt-3" action="delete-element.php" method="POST">
            <table class="table table-striped container-fluid">
                <thead>
                <tr>
                    <th scope="col" class="text-center">Index</th>
                    <th scope="col" class="text-center">Produit</th>
                    <th scope="col" class="text-center">Quantité</th>
                    <th scope="col" class="text-center">Selectionner</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php if (isset($_SESSION['course'])): ?>
                        <?php foreach ($_SESSION['course'] as $data) :?>
                                                    
                            <tr>
                                <div>
                                    <td class="text-center"><?=$data['id']?></td>
                                    <td class="text-center"><?=$data['product_name']?></td>
                                    <td class="text-center"><?=$data['quantity']?></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" name="id<?=$data['id'];?>" value="<?=$data['id'];?>"></td>
                                </div>   
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                    
                </tbody>

            </table>
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center me-2">
                    <button class="btn btn-warning mt-3" type="submit" href="delete-element.php">Supprimer la sélection</button>
                </div>

                <div class="d-flex justify-content-center ms-2">
                    <a class="btn btn-danger mt-3 text-decoration-none" href="session-killer.php">Supprimer toute la liste</a>
                </div>
            </div>

        </form> 

        

    </body>

</html>

<?php 



?>