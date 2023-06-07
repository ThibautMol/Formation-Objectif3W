<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Profil utilisateur'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php");?>
<?php require_once ("./assets/inc/nav-bar.php");?>
<?php //require_once ("./assets/functions/view-user-profil-from-list.php");?>
<?php require_once ("./assets/functions/add-element-form-profil-user-from-list.php")?>




    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil <?=(isset($_GET['id'])) ? "de " . ucfirst($user_profil['firstname']) . " " . ucfirst($user_profil['lastname']) : "";?></h1>
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
            </div>
              
        </div>

        <div class="m-auto btn btn-primary mt-3 text-capitalize">
            <a class="btn btn-primary text-capitalize" href="profil-user-edit.php?id=<?=$user_profil['id']?>">modifier</a>     
        </div> 
        
    </main>


<?php require_once ("./assets/inc/foot.php") ?>
