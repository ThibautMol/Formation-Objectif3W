<?php
   session_start();
    $login_form=$_POST;   

    function login_validation ($login_form) {
        require '.\assets\inc\mysql-login-request.php';


        if (isset($login_form['email']) && isset($login_form['password'])) {
            foreach ($login_selection as $user) {
                if ($user['email']===$login_form['email'] &&
                    $user['UserPwd']===$login_form['password']) {
                    $_SESSION['USER_FIRSTNAME']=$user['firstname'];
                    $_SESSION['USER_ID']=$user['id'];
                    $_SESSION['USER_LASTNAME']=$user['lastname'];
                }
            }
        }

        if ((isset($_SESSION['USER_FIRSTNAME']))){
            return header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/dashboard.php');
        }
        else {
            // echo '<div class="d-flex justify-content-center bg-danger mb-5 rounded w-25 font-italic">' . 'Login error' . '</div>';
        }
    }

    if (isset($_POST)){
        login_validation($login_form);
    }

?>