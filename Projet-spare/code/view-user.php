<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Profil utilisateur'?>
<?php $current_page="profil"?>
<?php require_once ("./assets/inc/head.php");?>
<?php //require_once ("./assets/inc/nav-bar.php");?>
<?php $is_disabled=1;?> <!-- a virer -->
<?php require_once ("./assets/functions/disabled-input.php")?> <!--vérif si pas de conflits avec require once après modification de la valeur is disabled-->
<?php require_once ("./assets/functions/view-user-profil-from-list.php");?>

<?php $user_profil=$_POST;?>
<?php var_dump($_POST)?>
<br>
<?php var_dump($user_profil)?>
<?php var_dump($_GET['ID']);?> <!-- problème dans la récupération de l'id dans l'url -->




    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil de <?=ucfirst($user_profil['firstname']);?> <?=ucfirst($user_profil['lastname']);?></h1>
        <form class="d-flex flex-column justify-content-center mt-3" action="view-user.php" method="post">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <label class="text-capitalize" for="UserEmail">email</label>
                    <input type="email" class="form-control" name="email" id="UserEmail" value="<?=$user_profil['email'];?>" <?=$disabled_abled;?> required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="password">password</label>
                    <input type="password" class="form-control" name="UserPwd" id="password" value="<?=$user_profil['UserPwd'];?>" <?=$disabled_abled;?> required>
                </div>
           
                <div class="">
                    <label class="text-capitalize" for="firstname">firstname</label>
                    <input type="text" class="form-control text-capitalize" name="firstname" id="firstname"  value="<?=$user_profil['firstname'];?>" <?=$disabled_abled;?> required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="validationServerUsername">lastname</label>
                    <div class="input-group">           
                        <input type="text" class="form-control text-capitalize" id="lastname" name="lastname" value="<?=$user_profil['lastname'];?>" aria-describedby="inputGroupPrepend3" <?=$disabled_abled;?> required>
                    </div>
                </div> 
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <label class="text-capitalize" for="statut">rôle</label>
                    <select name="statut" id="statut" <?=$disabled_abled;?> required>
                        <option value="<?=$user_profil['statut'];?>"><?=$user_profil['statut'];?></option>
                        <option class="text-capitalize" value="administrateur">administrateur</option>
                        <option class="text-capitalize" value="agent de traitement">agent de traitement</option>
                        <option class="text-capitalize" value="professeur">professeur</option>
                        <option class="text-capitalize" value="eleve">élève</option>
                    </select>
                </div>

                <div class="">
                    <label class="text-capitalize" for="classroom">classe</label>
                    <select name="classroom" id="classroom" <?=$disabled_abled;?> required>
                        <option value="<?=$user_profil['classroom'];?>"><?=$user_profil['classroom'];?></option>
                        <option class="text-capitalize" value="class1">class1</option>
                        <option class="text-capitalize" value="class2">class2</option>
                        <option class="text-capitalize" value="class3">class3</option>
                        <option class="text-capitalize" value="class4">class4</option>
                        <option class="text-capitalize" value="class5">class5</option>
                    </select>
                </div>

            </div>
            <input type="text" name="toto" value="tata">
            <button class="m-auto" type="submit">Modifier</button>      
        </form>

        <!-- <div class="m-auto btn btn-primary mt-3 text-capitalize">
                <a class="btn btn-primary mt-3 text-capitalize" class="btn btn-primary mt-3 text-capitalize" href="profil-user-edit.php" target="_blank">modifier</a>     
            </div>  -->
        
    </main>

    <?php //if(array_key_exists('button1', $_POST)) {disable($is_disabled);}elseif(array_key_exists('button2', $_POST)) {enable($is_disabled);}?>

<?php //function disabled($is_disabled) {if ($is_disabled==1) {return 'disabled';}else{return '';}} $disabled_abled=disabled($is_disabled);?>



<?php var_dump($_POST)//function enable() {return $is_disabled=NULL;}$is_disabled=enable();?>


<?php require_once ("./assets/inc/foot.php") ?>
