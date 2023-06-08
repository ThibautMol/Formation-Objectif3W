<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Profil'?>
<?php $current_page="profil"?>
<?php require_once ("./assets/inc/head.php");?>
<?php require_once ("./assets/inc/nav-bar.php");?>
<?php require_once ("./assets/functions/add-element-form-profil-user.php");?>


    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil</h1>
        <div class="d-flex flex-column justify-content-center mt-3" action="view-user.php" method="post">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <p class="text-capitalize" for="UserEmail">email</p>
                    <p class="form-control"><?=$user_profil['email'];?></p>
                </div>
                
                <!-- <div class="">
                    <p class="text-capitalize">password</p>
                    <p><?//=$user_profil['UserPwd'];?><p>
                </div> -->
           
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

                <div class="mt-3">
                    <p class="text-capitalize" >Classe</p>
                    <p class="form-control text-capitalize"><?=$user_profil['classroom'];?></p>
                </div>

                <div class="mt-3 <?=(($user_profil['ClassSpe'])=="0") ? "" : "d-none"?>">
                    <p class="text-capitalize">classe spécialité</p>
                    <p class="form-control text-capitalize"><?=$user_profil['ClassSpe'];?></p>
                </div>
                
            </div>

        </div>

        <div class="m-auto">
            <a class="btn btn-primary mt-3 text-capitalize" href="profil-user-edit.php">modifier</a>     
        </div> 
        
    </main>


<?php require_once ("./assets/inc/foot.php") ?>
