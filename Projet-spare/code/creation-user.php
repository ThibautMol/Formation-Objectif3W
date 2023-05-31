<?php require ("cookies.php") ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        
    <link rel="stylesheet" href="">

    <body>

        <form action='mysql-form-create-user.php' method="POST">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="UserEmail">email</label>
                    <input type="email" class="form-control is-valid" name="email" id="UserEmail" placeholder="Email" value="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control is-valid" name="UserPwd" id="password" value="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control is-valid" name="firstname" id="firstname" placeholder="firstname" value="" required>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="validationServerUsername">Last Name</label>
                    <div class="input-group">           
                        <input type="text" class="form-control is-invalid" id="lastname" name="lastname" placeholder="Last Name" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>
            </div>

            <!-- <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="role">role</label>
                    <select name="pets" id="pet-select">
                        <option value="">--Please choose an option--</option>
                        <option value="Administrateur">Administrateur</option>
                        <option value="Agent de traitement">Agent De Traitement</option>
                        <option value="Professeur">Professeur</option>
                        <option value="Eleve">Élève</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="classroom">Classe</label>
                    <select name="pets" id="pet-select">
                        <option value="">--Please choose an option--</option>
                        <option value="class1">class1</option>
                        <option value="class2">class2</option>
                        <option value="class3">class3</option>
                        <option value="class4">class4</option>
                        <option value="class5">class5</option>
                    </select>
                   
                    
                </div> -->

                <div class="col-md-3 mb-3">
                    <label for="CreationAccount">Date de création du compte</label>
                    <input type="date" class="form-control is-invalid" name="CreationAccount" id="CreationAccount" required>
                    
                </div>
            </div>
           

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <?php var_dump($_POST);
        require ("mysql-form-create-user.php");?>

    </body>
</html>