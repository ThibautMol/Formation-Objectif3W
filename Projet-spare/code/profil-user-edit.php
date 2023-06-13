<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php");?>
<?php $title='Édition profil'?>
<?php $current_page=(isset($_GET['id'])) ? "utilisateurs" : "profil"?>
<?php require_once ("./assets/inc/head.php");?>
<?php //require_once ("./assets/inc/nav-bar.php");?>
<?php //require_once ("./assets/functions/add-element-form-profil-user.php");?>
<?php //require_once ("./assets/functions/view-user-profil-from-list.php");?>
<?php (isset($_GET['id'])) ? require_once ("./assets/functions/add-element-form-profil-user-from-list.php") : require_once ("./assets/functions/add-element-form-profil-user.php");?>

<?= var_dump($_SESSION['FIRST_VISIT'])?>


    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Profil <?=(isset($_GET['id'])) ? "de " . ucfirst($user_profil['firstname']) . " " . ucfirst($user_profil['lastname']) : "";?></h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='' method="POST">
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

                <div class="">
                    <label class="text-capitalize" for="ClassSpe">classe spécialité</label>
                    <select name="ClassSpe" id="ClassSpe" required>
                        <<option value="<?=$user_profil['ClassSpe'];?>"><?=$user_profil['ClassSpe'];?></option>
                        <option class="text-capitalize" value="class1-1">class1-1</option>
                        <option class="text-capitalize" value="class1-2">class1-2</option>
                        <option class="text-capitalize" value="class1-3">class1-3</option>
                    </select>
                </div>

                <!-- <div class="">
                    <label for="CreationAccount">Date de création du compte</label>
                    <input type="date" class="form-control is-invalid" name="CreationAccount" id="CreationAccount" required>
                </div> -->
            </div>
           
            <div class="m-auto">
                <input class="btn btn-primary mt-3 text-capitalize" name="submit" type="submit" value="enregistrer">
            </div> 
        </form>
        
        

        <?php require_once ("./assets/inc/mysql-update-user-data.php") ?>

    </main>

<?php require_once ("./assets/inc/foot.php") ?>
