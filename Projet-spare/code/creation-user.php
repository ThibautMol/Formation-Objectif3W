<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='Ajouter un utilisateur'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>



<main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Nouvel utilisateur</h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='assets\inc\mysql-form-create-user.php' method="POST">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <label class="text-capitalize" for="UserEmail">email</label>
                    <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email" value="" required>
                </div>

                <div class="">
                    <label class="text-capitalize" for="password">password</label>
                    <input type="password" class="form-control" name="UserPwd" id="password" value="" required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="firstname">firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" value=""  required>
                </div>
                
                <div class="">
                    <label class="text-capitalize" for="validationServerUsername">lastname</label>
                    <div class="input-group">           
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <label class="text-capitalize" for="statut">rôle</label>
                    <select name="statut" id="statut" required>
                        <option value="">--Please choose an option--</option>
                        <option class="text-capitalize" value="administrateur">administrateur</option>
                        <option class="text-capitalize" value="agent de traitement">agent de traitement</option>
                        <option class="text-capitalize" value="professeur">professeur</option>
                        <option class="text-capitalize" value="eleve">élève</option>
                    </select>
                </div>

                <div class="">
                    <label class="text-capitalize" for="classroom">classe</label>
                    <select name="classroom" id="classroom" required>
                        <option value="">--Please choose an option--</option>
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
                        <option value="NULL">--Please choose an option--</option>
                        <option class="text-capitalize" value="class1-1">class1-1</option>
                        <option class="text-capitalize" value="class1-2">class1-2</option>
                        <option class="text-capitalize" value="class1-3">class1-3</option>
                    </select>
                </div>


            </div>
            <div class="m-auto">
                <button class="btn btn-primary mt-3 text-capitalize" type="submit" href="creation-user.php">enregistrer</button>
            </div>
        </form>
        
        <div class="m-auto">
            <?= ((isset($_POST)) && $_POST!=NULL) ? 'Utilisateur bien enregistré' : '' ?>
        </div>
    </main>

<?php require_once ("./assets/inc/foot.php") ?>

