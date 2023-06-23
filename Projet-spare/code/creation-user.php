<?php session_start(); ?>
<?php require_once ("./assets/functions/auto-return-login-if-not-logged.php") ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='Ajouter un utilisateur'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
<?php require_once ("./assets/inc/mysql-all-spe-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-main-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-roles-request.php")?>




<main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
    <h1>Nouvel utilisateur</h1>
    <form class="d-flex flex-column justify-content-center mt-3" action='./assets/inc/mysql-form-create-user.php' method="POST">
        <div class="form-row d-grid gap-3">
            <div class="">
                <label class="text-capitalize" for="UserEmail">email</label>
                <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email" value="" required> 
            </div>
            
            <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['emailErr'])) ? '' : 'd-none'?>" role="alert">
                <?=((isset($_SESSION['SPARE']['errors']['emailErr']) ? ($_SESSION['SPARE']['errors']['emailErr']) : ""))?></div>
            </div>
                            
            <div class="">
                <label class="text-capitalize" for="firstname">firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" value=""  required>
            </div>
            
            <div class="alert alert-danger text-danger text-center mx-auto mt-3 <?=(!empty($_SESSION['SPARE']['errors']['firstnameErr'])) ? '' : 'd-none'?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['firstnameErr']) ? ($_SESSION['SPARE']['errors']['firstnameErr']) : "" )?>
            </div>

            <div class="">
                <label class="text-capitalize" for="validationServerUsername">lastname</label>
                <div class="input-group">           
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" aria-describedby="inputGroupPrepend3" required>
                </div>
            </div>

            <div class="alert alert-danger text-danger text-center mx-auto mt-3 <?=(!empty($_SESSION['SPARE']['errors']['lastnameErr'])) ? '' : 'd-none'?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['lastnameErr']) ? ($_SESSION['SPARE']['errors']['lastnameErr']) : "") ?>
            </div>

        </div>
      
        <div class="form-row d-grid gap-3">
            <div class="mt-3">
                <label class="text-capitalize" for="statut">rôle</label>
                <select name="statut" id="statut" required>
                    <option value="">--Please choose an option--</option>
                    <?php foreach ($all_roles as $role) :?>
                        <option class="text-capitalize" value="<?=$role['name']?>"><?=$role['name']?></option>
                    <?php endforeach ;?>
                </select>
            </div>

            <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['statutErr'])) ? '' : 'd-none'?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['statutErr']) ? ($_SESSION['SPARE']['errors']['statutErr']) : "")?>
            </div>

            <div class="">
                <label class="text-capitalize" for="classroom">classe</label>
                <select name="classroom" id="classroom">
                    <option value="">--Please choose an option--</option>
                    <?php foreach ($all_main_classes as $main_class) :?>
                        <option class="text-capitalize" value="<?=$main_class['name']?>"><?=$main_class['name']?></option>
                    <?php endforeach ;?>
                </select>
            </div>

            <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['classroomErr'])) ? '' : 'd-none'?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['classroomErr']) ? ($_SESSION['SPARE']['errors']['classroomErr']) : "")?>
            </div>

            <div class="">
                <label class="text-capitalize" for="ClassSpe">classe spécialité</label>
                <select name="ClassSpe" id="ClassSpe">
                    <option value="">--Please choose an option--</option>
                    <?php foreach ($all_spe_classes as $spe_class) :?>
                        <option class="text-capitalize" value="<?=$spe_class['name']?>"><?=$spe_class['name']?></option>
                    <?php endforeach ;?>
                </select>
            </div>              
            
            <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['ClassSpeErr'])) ? '' : 'd-none'?>" role="alert">
                <?=(isset($_SESSION['SPARE']['errors']['ClassSpeErr']) ? ($_SESSION['SPARE']['errors']['ClassSpeErr']) : "")?>
            </div>
            
        </div>

        <div class="m-auto">
            <button class="btn btn-primary mt-3 text-capitalize" type="submit" href="#">enregistrer</button>
        </div>
    </form>
    
    
    <a class="alert alert-success m-auto mt-3 text-decoration-none text-success position-relative <?= ((isset($_SESSION['SPARE']['errors']['confirm_creation_user'])) &&  $_SESSION['SPARE']['errors']['confirm_creation_user']!=NULL) ? '' : 'd-none' ?>" href="./assets/functions/clearing-session-error-messages.php" role="alert">
        <div class="me-2"><?=(isset($_SESSION['SPARE']['errors']['confirm_creation_user']) ? $_SESSION['SPARE']['errors']['confirm_creation_user'] : "")?> 
        <i class="bi bi-x-circle position-absolute top-0 ms-1"></i></div>
    </a>


    <a class="alert alert-danger m-auto mt-3 text-decoration-none text-danger position-relative <?= ((isset($_SESSION['SPARE']['errors']['error_creation_user'])) && $_SESSION['SPARE']['errors']['error_creation_user']!=NULL) ? '' : 'd-none' ?>" href="./assets/functions/clearing-session-error-messages.php" role="alert">
        <div class="me-2"><?=(isset($_SESSION['SPARE']['errors']['error_creation_user']) ? $_SESSION['SPARE']['errors']['error_creation_user'] : "") ?> 
        <i class="bi bi-x-circle position-absolute top-0 ms-1"></i></div>
    </a>
    
    
</main>

<?php require_once ("./assets/inc/foot.php") ?>

