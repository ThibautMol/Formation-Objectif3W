<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Édition profil'?>
<?php $current_page="profil"?>
<?php require_once ("./assets/inc/head.php");?>
<?php //require_once ("./assets/inc/nav-bar.php");?>
<?php //require_once ("./assets/functions/add-element-form-profil-user.php");?>
<?php require_once ("./assets/functions/view-user-profil-from-list.php");?>

<?php $user_profil=$_POST;?>
<br>
<?php var_dump($user_profil);?>
<br>
<?php var_dump($_POST);?>



    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil</h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='assets\inc\mysql-form-create-user.php' method="POST">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <label class="text-capitalize" for="UserEmail">email</label>
                    <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email" value="<?=$user_profil['email'];?>" required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="password">password</label>
                    <input type="password" class="form-control text-capitalize" name="UserPwd" id="password" value="<?=$user_profil['UserPwd'];?>" required>
                </div>
           
                <div class="">
                    <label class="text-capitalize" for="firstname">firstname</label>
                    <input type="text" class="form-control text-capitalize" name="firstname" id="firstname" placeholder="firstname" value="<?=$user_profil['firstname'];?>" required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="validationServerUsername">lastname</label>
                    <div class="input-group">           
                        <input type="text" class="form-control text-capitalize" id="lastname" name="lastname" placeholder="LastName" value="<?=$user_profil['lastname'];?>" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <label class="text-capitalize" for="statut">rôle</label>
                    <select name="statut" id="statut" required>
                        <option value="<?=$user_profil['statut'];?>"><?=$user_profil['statut'];?></option>
                        <option class="text-capitalize" value="administrateur">administrateur</option>
                        <option class="text-capitalize" value="agent de traitement">agent de traitement</option>
                        <option class="text-capitalize" value="professeur">professeur</option>
                        <option class="text-capitalize" value="eleve">élève</option>
                    </select>
                </div>

                <div class="">
                    <label class="text-capitalize" for="classroom">classe</label>
                    <select name="classroom" id="classroom" required>
                        <option value="<?=$user_profil['classroom'];?>"><?=$user_profil['classroom'];?></option>
                        <option class="text-capitalize" value="class1">class1</option>
                        <option class="text-capitalize" value="class2">class2</option>
                        <option class="text-capitalize" value="class3">class3</option>
                        <option class="text-capitalize" value="class4">class4</option>
                        <option class="text-capitalize" value="class5">class5</option>
                    </select>
                  
                    
                </div>

                <!-- <div class="">
                    <label for="CreationAccount">Date de création du compte</label>
                    <input type="date" class="form-control is-invalid" name="CreationAccount" id="CreationAccount" required>
                </div> -->
            </div>
           
            

           
            
        </form>
        
        <div class="m-auto">
            <button class="btn btn-primary mt-3 text-capitalize" type="submit" onclick="disable()">enregistrer</button>
                
        </div> 

    </main>

    <?php //if(array_key_exists('button1', $_POST)) {disable($is_disabled);}elseif(array_key_exists('button2', $_POST)) {enable($is_disabled);}?>

<?php //function disabled($is_disabled) {if ($is_disabled==1) {return 'disabled';}else{return '';}} $disabled_abled=disabled($is_disabled);?>



<?php //function enable() {return $is_disabled=NULL;}$is_disabled=enable();?>


<?php require_once ("./assets/inc/foot.php") ?>
