
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid me-5 ms-5">
            <a class="navbar-brand" href="dashboard.php"><img src="assets/img/spare-logo-small.png" title="SPARE Logo" alt="SPARE Logo"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                <a class="nav-link <?= $current_page=='dashboard' ?  'dashboard' :'' ?>" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?= $current_page=='cartes' ?  'cartes' :'' ?>" href="#">Cartes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?= $current_page=='plateaux' ?  'plateaux' :'' ?>" href="#">Plateaux</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?= $current_page=='utilisteurs' ?  'utilisateurs' :'' ?>" href="#">Utilisateurs</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?= $current_page=='profil' ?  'profil' :'' ?>" href="#">Profil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="assets/functions/session_end.php">Se déconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
