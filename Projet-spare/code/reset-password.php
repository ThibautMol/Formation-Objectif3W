<?php session_start(); ?>
<?php require_once ("./assets/functions/auto-return-login-if-not-logged.php") ?>
<?php $title='Changez votre mot de passe'?>
<?php require_once ("./assets/inc/head.php") ?>
<?php //require_once ("./assets/inc/nav-bar.php") ?>


<main class="text-center d-flex justify-content-center ">
       

        <div class="card bg-dark mt-5" style="width: 20rem;">
                <img class="card-img-top mx-auto mt-5" src="https://www.objectif3d.com/wp-content/uploads/2023/01/O3D_blanc_flat-1.png" style="max-height:50px; max-width: 100px;" alt="Objectif 3D" id="logo">
                <form class="card-body" action="./assets/functions/first-connexion-reset-password-and-update.php" method="POST">
                        <label for="new_pwd" class="sr-only">Nouveau mot de passe</label>
                        <input type="password" id="inputEmail" class="form-control mt-3" name="new_pwd" placeholder="Nouveau mot de passe" required >
                       
                        <label for="confirm_pwd" class="sr-only">Confirmer le mot de passe</label>
                        <div class="alert alert-danger mt-3 <?=(isset($_SESSION['SPARE']['errors']['confirm_pwd_err'])) ? "": "d-none"?>" role="alert"><?=(isset($_SESSION['SPARE']['errors']['confirm_pwd_err'])) ? $_SESSION['SPARE']['errors']['confirm_pwd_err'] : ""?></div>
                        <input type="password" id="confirm_pwd" name="confirm_pwd" class="form-control mt-3" placeholder="Confirmer le mot de passe">
                        <div class="alert alert-danger mt-3" role="alert">Veuillez changer votre mot de passe</div>
                        
                        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Enregistrer</button>
                </form>  
        </div>
</main>

<?php require_once ("./assets/inc/foot.php") ?>