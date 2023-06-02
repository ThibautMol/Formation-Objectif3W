
<?php $title='Login';?>
<?php require_once (".\assets\inc\head.php")?>
<?php require_once (".\assets\inc\cookies.php")?>

        
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <form class="md-5 mt-md-4 pb-5" action="" method="post">
                                <img src="assets/img/spare-logo.png" class="mb-5" title="SPARE Logo" alt="SPARE Logo">
                                <h2 class="fw-bold mb-4 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-3">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <!-- <label class="form-label" for="login"></label> -->
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <!-- <label class="form-label" for="password">Password</label> -->
                                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50 text-decoration-none" href="#!">Forgot password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div> -->

                            </form>
                            
                            <?php require ("./assets/functions/login-function.php")?>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold text-decoration-none ">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php require_once ("./assets/inc/foot.php") ?>