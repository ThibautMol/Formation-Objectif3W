
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid me-5 ms-5">
            <a class="navbar-brand" href="dashboard.php"><img src="https://www.objectif3d.com/wp-content/uploads/2023/01/O3D_blanc_flat-1.png" alt="Objectif 3D" id="logo" class="img-fluid me-3" style="max-height:50px;"><img src="assets/img/spare-logo-small.png" title="SPARE Logo" alt="SPARE Logo"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page=='appels' ?  'active' :'' ?>" href="#">Appels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page=='classes' ?  'active' :'' ?>" href="#">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page=='eleves' ?  'active' :'' ?>" href="#">Élèves</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page=='absences/retards' ?  'active' :'' ?>" href="#">Absences/Retards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page=='utilisateurs' ?  'active' :'' ?>" href="users-list.php">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page=='profil' ?  'active' :'' ?>" href="profil-user.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="assets/functions/session_end.php">Se déconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
