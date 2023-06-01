<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='Inscription'?>
<?php $current_page=""?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>

    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Formulaire d'inscription</h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='assets\inc\mysql-form-create-user.php' method="POST">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <label class="text-capitalize" for="UserEmail">email</label>
                    <input type="email" class="form-control is-valid" name="email" id="UserEmail" placeholder="Email" value="" required>
                </div>

                <div class="">
                    <label class="text-capitalize" for="password">password</label>
                    <input type="password" class="form-control is-valid" name="UserPwd" id="password" placeholder="Password" value="" required>
                </div>

                <div class="">
                    <label class="text-capitalize" for="firstname">firstname</label>
                    <input type="text" class="form-control is-valid" name="firstname" id="firstname" placeholder="Firstname" value="" required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="validationServerUsername">lastname</label>
                    <div class="input-group">           
                        <input type="text" class="form-control is-invalid" id="lastname" name="lastname" placeholder="LastName" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <label class="text-capitalize" for="statut">rôle</label>
                    <select name="statut" id="statut">
                        <option value="">--Please choose an option--</option>
                        <option class="text-capitalize" value="administrateur">administrateur</option>
                        <option class="text-capitalize" value="agent de traitement">agent de traitement</option>
                        <option class="text-capitalize" value="professeur">professeur</option>
                        <option class="text-capitalize" value="eleve">élève</option>
                    </select>
                </div>

                <div class="">
                    <label class="text-capitalize" for="classroom">classe</label>
                    <select name="classroom" id="classroom">
                        <option value="">--Please choose an option--</option>
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
           
            <div class="m-auto">
                <button class="btn btn-primary mt-3 text-capitalize" type="submit">enregistrer</button>
            </div>    
        </form>
    </main>

<?php require_once ("./assets/inc/foot.php") ?>

