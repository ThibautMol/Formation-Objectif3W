<?php session_start(); ?>
<?php require_once ("./assets/functions/auto-return-login-if-not-logged.php") ?>
<?php require_once ("./assets/functions/auto-return-and-logoff-if-first-visit.php") ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Édition profil'?>
<?php $current_page=(isset($_GET['id'])) ? "utilisateurs" : "profil"?>
<?php require_once ("./assets/inc/head.php");?>
<?php require_once ("./assets/inc/nav-bar.php");?>
<?php require_once ("./assets/inc/mysql-all-spe-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-main-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-roles-request.php")?>
<?php (isset($_SESSION['SPARE']['user_id_checking'])) ? require_once ("./assets/functions/add-element-form-profil-user-from-list.php") : require_once ("./assets/functions/add-element-form-profil-user.php");?>



    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil <?=(isset($_SESSION['SPARE']['user_id_checking'])) ? "de " . ucfirst($user_profil['firstname']) . " " . ucfirst($user_profil['lastname']) : "";?></h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='./assets/inc/mysql-update-user-data.php' method="POST">
            <div class="form-row d-grid gap-3">

                <div class="d-none">
                    <input type="text" class="form-control" name="id" id="id" value="<?=$user_profil['id'];?>" required>
                </div>

                <div class="">
                    <label class="text-capitalize" for="UserEmail">email</label>
                    <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email" value="<?=$user_profil['email'];?>" required>
                </div>

                <div class="alert alert-danger text-danger text-center mx-auto <?=((!empty($_SESSION['SPARE']['errors']['emailErr']))&&($_SESSION['SPARE']['errors']['emailErr']!="Email déjà utilisé")) ? '' : 'd-none'?>" role="alert">
                    <?=(((isset($_SESSION['SPARE']['errors']['emailErr'])&&($_SESSION['SPARE']['errors']['emailErr']!="Email déjà utilisé")) ? ($_SESSION['SPARE']['errors']['emailErr']) : ""))?></div>
                </div>
                          
                <div class="">
                    <label class="text-capitalize" for="firstname">firstname</label>
                    <input type="text" class="form-control text-capitalize" name="firstname" id="firstname" placeholder="firstname" value="<?=$user_profil['firstname'];?>" required>
                </div>

                <div class="alert alert-danger text-danger text-center mx-auto mt-3 <?=(!empty($_SESSION['SPARE']['errors']['firstnameErr'])) ? '' : 'd-none'?>" role="alert">
                    <?=(isset($_SESSION['SPARE']['errors']['firstnameErr']) ? ($_SESSION['SPARE']['errors']['firstnameErr']) : "" )?>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="validationServerUsername">lastname</label>
                    <div class="input-group">           
                        <input type="text" class="form-control text-capitalize" id="lastname" name="lastname" placeholder="LastName" value="<?=$user_profil['lastname'];?>" aria-describedby="inputGroupPrepend3" required>
                    </div>
                    <div class="alert alert-danger text-danger text-center mx-auto mt-3 <?=(!empty($_SESSION['SPARE']['errors']['lastnameErr'])) ? '' : 'd-none'?>" role="alert">
                        <?=(isset($_SESSION['SPARE']['errors']['lastnameErr']) ? ($_SESSION['SPARE']['errors']['lastnameErr']) : "") ?>
                    </div>
                </div>
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <label class="text-capitalize" for="statut">rôle</label>
                    <select name="statut" id="statut" required>                        
                        <option value="<?=$user_profil['statut'];?>"><?=$user_profil['statut'];?></option>            
                        <?php foreach ($all_roles as $role) :?>
                            <option class="text-capitalize <?=($role['name']==$user_profil['statut']) ? 'd-none' : ''?>" value="<?=$role['name']?>"><?=$role['name']?></option>
                        <?php endforeach ;?>
                    </select>
                </div>

                <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['statutErr'])) ? '' : 'd-none'?>" role="alert">
                    <?=(isset($_SESSION['SPARE']['errors']['statutErr']) ? ($_SESSION['SPARE']['errors']['statutErr']) : "")?>
                </div>

                <div class="">
                    <label class="text-capitalize" for="classroom">classe</label>
                    <select name="classroom" id="classroom">
                        <option class="<?=(empty($user_profil['classroom'])) ? "d-none" : ""?>" value="<?=$user_profil['classroom'];?>"><?=$user_profil['classroom'];?></option>
                        <option value=""></option>
                        <?php foreach ($all_main_classes as $main_class) :?>
                            <option class="text-capitalize <?=($main_class['name']==$user_profil['classroom']) ? 'd-none' : ''?>" value="<?=$main_class['name']?>"><?=$main_class['name']?></option>
                        <?php endforeach ;?>
                    </select>
                </div>

                <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['classroomErr'])) ? '' : 'd-none'?>" role="alert">
                    <?=(isset($_SESSION['SPARE']['errors']['classroomErr']) ? ($_SESSION['SPARE']['errors']['classroomErr']) : "")?>
                </div>

                <div class="">
                    <label class="text-capitalize" for="ClassSpe">classe spécialité</label>
                    <select name="ClassSpe" id="ClassSpe">                        
                        <option class="<?=(empty($user_profil['ClassSpe'])) ? "d-none" : ""?>" value="<?=$user_profil['ClassSpe'];?>"><?=$user_profil['ClassSpe'];?></option>
                        <option value=""></option>
                        <?php foreach ($all_spe_classes as $spe_class) :?>
                            <option class="text-capitalize <?=($spe_class['name']==$user_profil['ClassSpe']) ? 'd-none' : ''?>" value="<?=$spe_class['name']?>"><?=$spe_class['name']?></option>
                        <?php endforeach ;?>
                    </select>
                </div>

                <div class="alert alert-danger text-danger text-center mx-auto <?=(!empty($_SESSION['SPARE']['errors']['ClassSpeErr'])) ? '' : 'd-none'?>" role="alert">
                    <?=(isset($_SESSION['SPARE']['errors']['ClassSpeErr']) ? ($_SESSION['SPARE']['errors']['ClassSpeErr']) : "")?>
                </div>

            </div>
           
            <div class="m-auto">
                <input class="btn btn-primary mt-3 text-capitalize" name="submit" type="submit" value="enregistrer">
            </div> 
        </form>

        <a class="alert alert-success m-auto mt-3 text-decoration-none text-success position-relative <?= ((isset( $_SESSION['SPARE']['errors']['update_success'])) &&   $_SESSION['SPARE']['errors']['update_success']!=NULL) ? '' : 'd-none' ?>" href="./assets/functions/clearing-session-error-messages.php" role="alert">
            <div class="me-2"><?=(isset( $_SESSION['SPARE']['errors']['update_success']) ?  $_SESSION['SPARE']['errors']['update_success'] : "")?> 
            <i class="bi bi-x-circle position-absolute top-0 ms-1"></i></div>
        </a>


    <a class="alert alert-danger m-auto mt-3 text-decoration-none text-danger position-relative <?= ((isset($_SESSION['SPARE']['errors']['update_failed'])) && $_SESSION['SPARE']['errors']['update_failed']!=NULL) ? '' : 'd-none' ?>" href="./assets/functions/clearing-session-error-messages.php" role="alert">
        <div class="me-2"><?=(isset($_SESSION['SPARE']['errors']['update_failed']) ? $_SESSION['SPARE']['errors']['update_failed'] : "") ?> 
        <i class="bi bi-x-circle position-absolute top-0 ms-1"></i></div>
    </a>
        



    </main>

<?php require_once ("./assets/inc/foot.php") ?>
