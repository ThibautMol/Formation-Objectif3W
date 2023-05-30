<?php

    $login_form=$_POST;

    include 'BDD.PHP';
   



    function login_validation ($login_form) {

        $user1 = [
            'email'=>'bob@mail.com',
            'password'=>'bob'
        ];
        
        $user2 = [
            'email'=>'sophie@mail.com',
            'password'=>'sophie'
        ];
        
        $user3 = [
            'email'=>'jean@mail.com',
            'password'=>'jean'
        ];
        
        $bdd = [
            $user1, $user2, $user3
        ];

        if (isset($login_form['email']) && isset($login_form['password'])) {
            foreach ($bdd as $user) {
                if ($user['email']===$login_form['email'] &&
                    $user['password']===$login_form['password']) {
                    // $success=true;
                    $_SESSION['LOGGED_USER']=$user['email'];
                }
            }
        }

        // if ((isset($success)) && ($success==true))

        if ((isset($_SESSION['LOGGED_USER']))){
            // return 'c kool';
            return '<div class="d-flex justify-content-center">' . 'Login success' . '</div>';
            // return header(Location : . $monUrl, true, 301);
            // Exit();
        }
        else {
            return '<div class="d-flex justify-content-center">' . 'Login error' . '</div>';
            
        }
    }

    if (isset($_POST)){
        echo login_validation($login_form);
    }




    ?>