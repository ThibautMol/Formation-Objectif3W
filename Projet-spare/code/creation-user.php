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


<main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Nouvel utilisateur</h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='./assets/inc/mysql-form-create-user.php' method="POST">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <label class="text-capitalize" for="UserEmail">email</label>
                    <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email" value="" required>
                </div>
                
                <div class="alert alert-danger <?=(!empty($emailErr)) ? '' : 'd-none'?>" role="alert">
                    <?=$emailErr?>
                </div>

                <!-- <div class="">
                    <label class="text-capitalize" for="password">password</label>
                    <input type="password" class="form-control" name="UserPwd" id="password" value="" required>
                </div> -->

                              
                <div class="">
                    <label class="text-capitalize" for="firstname">firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" value=""  required>
                </div>
                
                <div class="alert alert-danger <?=(!empty($firstnameErr)) ? '' : 'd-none'?>" role="alert">
                    <?=$firstnameErr?>
                </div>

                <div class="">
                    <label class="text-capitalize" for="validationServerUsername">lastname</label>
                    <div class="input-group">           
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>

                <div class="alert alert-danger <?=(!empty($lastnameErr)) ? '' : 'd-none'?>" role="alert">
                    <?=$lastnameErr?>
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

                <div class="alert alert-danger <?=(!empty($roleErr)) ? '' : 'd-none'?>" role="alert">
                    <?=$roleErr?>
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

                <div class="alert alert-danger <?=(!empty($classroomErr)) ? '' : 'd-none'?>" role="alert">
                    <?=$classroomErr?>
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
                
                <div class="alert alert-danger <?=(!empty($ClassSpeErr)) ? '' : 'd-none'?>" role="alert">
                    <p class="alert alert-danger"><?=$ClassSpeErr?></p>
                </div>
               
            </div>

            <div class="m-auto">
                <button class="btn btn-primary mt-3 text-capitalize" type="submit" href="#">enregistrer</button>
            </div>
        </form>
        
        <div class="alert alert-success m-auto mt-3 <?= ((isset($_SESSION['confirm_creation_user'])) &&  $_SESSION['confirm_creation_user']!=NULL) ? '' : 'd-none' ?>" role="alert">
            <?=$_SESSION['confirm_creation_user']?>
        </div>

        <div class="alert alert-danger m-auto mt-3 <?= ((isset($_SESSION['error_creation_user'])) && $_SESSION['error_creation_user']!=NULL) ? '' : 'd-none' ?>" role="alert">
            <?=$_SESSION['error_creation_user']?>
        </div>
    

        <p>TROUVER UNE SOLUTION POUR CLEAR LA SESSION (CHECKBOX POUR VALIDER LE MESSAGE PAR EXEMPLE)</p>
    </main>

<?php require_once ("./assets/inc/foot.php") ?>

