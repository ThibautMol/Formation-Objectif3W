<?php session_start(); ?>
<?php require_once ("./assets/functions/auto-return-login-if-not-logged.php") ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Profil utilisateur'?>
<?php $current_page=(isset($_GET['id'])) ? "utilisateurs" : "profil"?>
<?php require_once ("./assets/inc/head.php");?>
<?php require_once ("./assets/inc/nav-bar.php");?>
<?php (isset($_GET['id'])) ? $_SESSION['SPARE']['user_id_checking']=$_GET['id'] : ""; //this variable will be unset if you check your own profil and will be set again when you consult a user profil.?> 
<?php (isset($_SESSION['SPARE']['user_id_checking'])) ? require_once ("./assets/functions/add-element-form-profil-user-from-list.php") : require_once ("./assets/functions/add-element-form-profil-user.php");?>




    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil <?=(isset($_SESSION['SPARE']['user_id_checking'])) ? "de " . ucfirst($user_profil['firstname']) . " " . ucfirst($user_profil['lastname']) : "";?></h1>

        <form class="card-body" action="./assets/functions/reset-password-and-update.php" method="POST">
                    
            <div class="alert alert-danger mt-3 <?=(isset($_SESSION['SPARE']['errors']['reset_password_err'])) ? "": "d-none"?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['reset_password_err'])) ? $_SESSION['SPARE']['errors']['reset_password_err'] : ""?>
            </div>
            <div class="alert alert-danger mt-3 <?=(isset($_SESSION['SPARE']['errors']['reset_password_success'])) ? "": "d-none"?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['reset_password_success'])) ? $_SESSION['SPARE']['errors']['reset_password_success'] : ""?>
            </div>
            <input class="d-none" type="password" id="confirm_pwd" name="reset_password" value=1>
                                    
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Réinitialiser le mot de passe</button>
        </form> 
        
        
        <div class="d-flex flex-column justify-content-center mt-3" action="view-user.php" method="post">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <p class="text-capitalize" for="UserEmail">email</p>
                    <p class="form-control"><?=$user_profil['email'];?></p>
                </div>
           
                <div class="">
                    <p class="text-capitalize">firstname</p>
                    <p class="form-control text-capitalize"><?=$user_profil['firstname'];?></p>
                </div>
                
                <div class="">
                    <p class="text-capitalize">lastname</p>  
                    <p class="form-control text-capitalize"><?=$user_profil['lastname'];?></p>
                </div> 
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <p class="text-capitalize" >rôle</p>
                    <p class="form-control text-capitalize"><?=$user_profil['statut'];?></p>
                </div>

                <div class="mt-3 <?=(empty($user_profil['classroom'])) ? "d-none" : ""?>">
                    <p class="text-capitalize" >Classe</p>
                    <p class="form-control text-capitalize"><?=$user_profil['classroom'];?></p>
                </div>

                <div class="mt-3 <?=(empty($user_profil['ClassSpe'])) ? "d-none" : ""?>">
                    <p class="text-capitalize">classe spécialité</p>
                    <p class="form-control text-capitalize"><?=$user_profil['ClassSpe'];?></p>
                </div>

            </div>
              
        </div>

        <div class="m-auto btn btn-primary mt-3 text-capitalize">
            <a class="btn btn-primary text-capitalize" href="profil-user-edit.php<?=(isset($_GET['id'])) ? "?id=".$user_profil['id'] : ""?>">modifier</a>     
        </div> 
        
    </main>


<?php require_once ("./assets/inc/foot.php") ?>
