<?php session_start();?>
<?php $current_page='autres'; $title='Liste de course';?>
<?php require_once ('../assets/inc/head.php');?>
<?php require_once ('../assets/inc/navbar.php');?>

    
<section class="d-flex flex-column justify-content-center mt-5 container-xl">
    <form class="d-flex flex-column justify-content-center mt-3" action='processing-post.php' method="POST">
        <div class="form-row d-grid gap-3">
        <div class="m-auto d-none">
                <input type="text" class="form-control" name="id" id="id" value="<?=(!empty($_SESSION['course'])) ? count($_SESSION['course']) : "0" ?>" > 
            </div>
            <div class="m-auto">
                <label class="text-capitalize" for="product_name">Produit</label>
                <input type="text" class="form-control" name="product_name" id="product_name" required > 
            </div>
            <div class="m-auto">
                <label class="text-capitalize" for="quantity">Quantité</label>
                <input type="number" class="form-control" name="quantity" id="quantity" required> 
            </div>
        </div>

        <div class="m-auto">
            <button class="btn btn-primary mt-3 text-capitalize" type="submit" href="#">valider</button>
        </div>
        
    </form>
    

    <h2 class="m-auto mt-3 <?=(!isset($_SESSION['course'])) ? "d-none" : ""?>">Liste des courses</h2>
    <form class="d-flex flex-column justify-content-center mt-3 <?=(!isset($_SESSION['course'])) ? "d-none" : ""?>" action="delete-element.php" method="POST">
        <table class="table table-striped container-fluid">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Index</th>
                    <th scope="col" class="text-center">Produit</th>
                    <th scope="col" class="text-center">Quantité</th>
                    <th scope="col" class="text-center">Sélectionner</th>
                </tr>
            </thead>
            
            <tbody>
                
                <?php if (isset($_SESSION['course'])): 
                    $i= 0;?>
                    <?php foreach ($_SESSION['course'] as $data) :?>
                                                
                        <tr>
                            <div>
                                <td class="text-center"><?=$i?></td>
                                <td class="text-center"><?=$data['product_name']?></td>
                                <td class="text-center"><?=$data['quantity']?></td>
                                <td class="text-center"><input class="form-check-input" type="checkbox" name="id<?=$i?>" value="<?=$i?>"></td>
                            </div>   
                        </tr>
                    <?php $i++ ; endforeach;?>
                <?php endif;?>
                
            </tbody>

        </table>
        <div class="d-flex justify-content-center <?=(!isset($_SESSION['course'])) ? "d-none" : ""?>">
            <div class="d-flex justify-content-center me-2">
                <button class="btn btn-warning mt-3" type="submit" href="<?=(!isset($_SESSION['course'])) ? "" : "delete-element.php"?>">Supprimer la sélection</button>
            </div>

            <div class="d-flex justify-content-center ms-2">
                <a class="btn btn-danger mt-3 text-decoration-none" href="<?=(!isset($_SESSION['course'])) ? "" : "../assets/session-killer.php"?>">Supprimer toute la liste</a>
            </div>
        </div>

    </form> 
</section>

<?php require_once ('../assets/inc/foot.php');?>