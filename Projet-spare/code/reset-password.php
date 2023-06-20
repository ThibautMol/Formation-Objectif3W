<?php session_start(); ?>
<?php $title='Dashboard'?>
<?php require_once ("./assets/inc/head.php") ?>
<?php require_once ("./assets/inc/nav-bar.php") ?>



<div class="<?=($_SESSION['SPARE']['FIRST_VISIT']!=1) ? '' : 'd-none' ?>">
        <label class="text-capitalize" for="password">password</label>
        <input type="password" class="form-control text-capitalize" name="UserPwd" id="password" <?=($_SESSION['SPARE']['FIRST_VISIT']!=1) ? 'required' : '' ?>>
        <div class="alert alert-danger mt-2" role="alert">Veuillez entrer votre nouveau mot de passe</div>
        </div>
</div>



<?php require_once ("./assets/inc/foot.php") ?>