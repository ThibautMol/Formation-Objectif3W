<nav class="navbar navbar-expand-sm bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid me-5 ms-5">
    <a class="navbar-brand" href="http://localhost/Formation-Objectif3W/Portfolio/index.php">Portfolio Thibaut</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-sm-0 align-items-end">
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'score' ? 'active' : '' ?>" href="http://localhost/Formation-Objectif3W/Portfolio/score.php">Votre score</a> 
          <!-- rajouter une ternaire pour passer en vert le mot score si la personne à terminé un des mini-jeux -->
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'mini-jeux' ? 'active' : '' ?>" href="http://localhost/Formation-Objectif3W/Portfolio/mini-games.php">Mini-jeux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'calculateurs' ? 'active' : '' ?>"  href="http://localhost/Formation-Objectif3W/Portfolio/calculators.php">Calculateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'autres' ? 'active' : '' ?>" href="http://localhost/Formation-Objectif3W/Portfolio/other.php">Autres</a>
        </li>
        <li class="nav-item">
          <a href="http://localhost/Formation-Objectif3W/Portfolio/assets/session-killer.php" class="btn btn-outline-danger ms-3" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reset les scores"><i class="fa-solid fa-skull"></i></a>
        </li>

        <div class="d-flex" role="search">
          
        </div>
      </ul>
    </div>
  </div>
</nav>

<main style="min-height: calc(89vh - 57px)">
