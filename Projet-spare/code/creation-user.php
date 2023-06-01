<?php //session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='Inscription'?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>

    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
        <h1>Formulaire d'inscription</h1>
        <form class="d-flex flex-column justify-content-center mt-3" action='mysql-form-create-user.php' method="POST">
            <div class="form-row d-grid gap-3">
                <div class="">
                    <label for="UserEmail">Email</label>
                    <input type="email" class="form-control is-valid" name="email" id="UserEmail" placeholder="Email" value="" required>
                </div>

                <div class="">
                    <label for="password">Password</label>
                    <input type="password" class="form-control is-valid" name="UserPwd" id="password" value="" required>
                </div>

                <div class="">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control is-valid" name="firstname" id="firstname" placeholder="firstname" value="" required>
                </div>
                
                <div class="">
                    <label for="validationServerUsername">Last Name</label>
                    <div class="input-group">           
                        <input type="text" class="form-control is-invalid" id="lastname" name="lastname" placeholder="Last Name" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>
            </div>

            <div class="form-row d-grid gap-3">
                <div class="mt-3">
                    <label for="statut">Rôle</label>
                    <select name="statut" id="statut">
                        <option value="">--Please choose an option--</option>
                        <option value="Administrateur">Administrateur</option>
                        <option value="Agent de traitement">Agent De Traitement</option>
                        <option value="Professeur">Professeur</option>
                        <option value="Eleve">Élève</option>
                    </select>
                </div>

                <div class="">
                    <label for="classroom">Classe</label>
                    <select name="classroom" id="classroom">
                        <option value="">--Please choose an option--</option>
                        <option value="class1">class1</option>
                        <option value="class2">class2</option>
                        <option value="class3">class3</option>
                        <option value="class4">class4</option>
                        <option value="class5">class5</option>
                    </select>
                   
                    
                </div>

                <div class="">
                    <label for="CreationAccount">Date de création du compte</label>
                    <input type="date" class="form-control is-invalid" name="CreationAccount" id="CreationAccount" required>
                    
                </div>
            </div>
           
            <div class="m-auto">
                <button class="btn btn-primary mt-3" type="submit">Submit form</button>
            </div>    
        </form>  
    </main>

<?php require_once ("./assets/inc/foot.php") ?>

<?php var_dump($_POST);
        require (".\assets\inc\mysql-form-create-user.php");?>