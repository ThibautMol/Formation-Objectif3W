<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='Ajouter un utilisateur'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
<?php //require_once ("./assets/functions/valid-data-form.php")?>
<?php //require_once ("./assets/inc/mysql-form-create-user.php")?>
<?php require_once ("./assets/inc/mysql-all-spe-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-main-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-roles-request.php")?>

<?php $test=1;?>


<main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
    <h1>Nouvel utilisateur</h1>
    <form class="d-flex flex-column justify-content-center mt-3" action='./assets/inc/mysql-form-create-user.php' method="POST">
        <div class="form-row d-grid gap-3">
            <div class="">
                <label class="text-capitalize" for="UserEmail">email</label>
                <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email" value="" <?=($test=1) ? "" : 'required'?>> 
            </div>
            
            <div class="alert alert-danger <?=(!empty($_SESSION['SPARE']['emailErr'])) ? '' : 'd-none'?>" role="alert">
                <?=($_SESSION['SPARE']['emailErr'])?>
            </div>
                            
            <div class="">
                <label class="text-capitalize" for="firstname">firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" value=""  <?=($test=1) ? "" : 'required'?>>
            </div>
            
            <div class="alert alert-danger <?=(!empty($_SESSION['SPARE']['firstnameErr'])) ? '' : 'd-none'?>" role="alert">
                <?=($_SESSION['SPARE']['firstnameErr'])?>
            </div>

            <div class="">
                <label class="text-capitalize" for="validationServerUsername">lastname</label>
                <div class="input-group">           
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" aria-describedby="inputGroupPrepend3" <?=($test=1) ? "" : 'required'?>>
                </div>
            </div>

            <div class="alert alert-danger <?=(!empty($_SESSION['SPARE']['lastnameErr'])) ? '' : 'd-none'?>" role="alert">
                <?=($_SESSION['SPARE']['lastnameErr'])?>
            </div>

        </div>
      
        <div class="form-row d-grid gap-3">
            <div class="mt-3">
                <label class="text-capitalize" for="statut">rôle</label>
                <select name="statut" id="statut" <?=($test=1) ? "" : 'required'?>>
                    <option value="">--Please choose an option--</option>
                    <?php foreach ($all_roles as $role) :?>
                        <option class="text-capitalize" value="<?=$role['name']?>"><?=$role['name']?></option>
                    <?php endforeach ;?>
                </select>
            </div>

            <div class="alert alert-danger <?=(!empty($_SESSION['SPARE']['statutErr'])) ? '' : 'd-none'?>" role="alert">
                <?=($_SESSION['SPARE']['statutErr'])?>
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

            <div class="alert alert-danger <?=(!empty($_SESSION['SPARE']['classroomErr'])) ? '' : 'd-none'?>" role="alert">
                <?=($_SESSION['SPARE']['classroomErr'])?>
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
            
            <div class="alert alert-danger <?=(!empty($_SESSION['SPARE']['ClassSpeErr'])) ? '' : 'd-none'?>" role="alert">
                <?=($_SESSION['SPARE']['ClassSpeErr'])?>
            </div>
            
        </div>

        <div class="m-auto">
            <button class="btn btn-primary mt-3 text-capitalize" type="submit" href="#">enregistrer</button>
        </div>
    </form>
    
    <!-- <div class="alert alert-success m-auto mt-3 <?= ((isset($_SESSION['SPARE']['confirm_creation_user'])) &&  $_SESSION['SPARE']['confirm_creation_user']!=NULL) ? '' : 'd-none' ?>" role="alert">
        <a class="text-decoration-none text-success" href="./assets/functions/clearing-session-error-messages.php"><?=$_SESSION['SPARE']['confirm_creation_user']?> <i class="bi bi-x-circle"></i></a>
    </div> -->

    <a class="alert alert-success m-auto mt-3 text-decoration-none text-success position-relative <?= ((isset($_SESSION['SPARE']['confirm_creation_user'])) &&  $_SESSION['SPARE']['confirm_creation_user']!=NULL) ? '' : 'd-none' ?>" href="./assets/functions/clearing-session-error-messages.php" role="alert">
        <div class="me-2"><?=$_SESSION['SPARE']['confirm_creation_user']?> 
        <i class="bi bi-x-circle position-absolute top-0 ms-1"></i></div>
    </a>

    <!-- <div class="alert alert-danger m-auto mt-3 <?= ((isset($_SESSION['SPARE']['error_creation_user'])) && $_SESSION['SPARE']['error_creation_user']!=NULL) ? '' : 'd-none' ?>" role="alert">
        <a class="text-decoration-none text-danger" href="./assets/functions/clearing-session-error-messages.php"><?=$_SESSION['SPARE']['error_creation_user']?> <i class="bi bi-x-circle mb-3"></i></a>
    </div> -->

    <a class="alert alert-danger m-auto mt-3 text-decoration-none text-danger position-relative <?= ((isset($_SESSION['SPARE']['error_creation_user'])) && $_SESSION['SPARE']['error_creation_user']!=NULL) ? '' : 'd-none' ?>" href="./assets/functions/clearing-session-error-messages.php" role="alert">
        <div class="me-2"><?=$_SESSION['SPARE']['error_creation_user']?> 
        <i class="bi bi-x-circle position-absolute top-0 ms-1"></i></div>
    </a>
    
    
</main>

<?php require_once ("./assets/inc/foot.php") ?>

