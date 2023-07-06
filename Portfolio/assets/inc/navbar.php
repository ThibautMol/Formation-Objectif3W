<nav class="navbar navbar-expand-sm bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid me-5 ms-5">
    <a class="navbar-brand" href="index.php">Portfolio Thibaut</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-sm-0 align-items-end">
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'mini-jeux' ? 'active' : '' ?>" href="mini-games.php">Mini-jeux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'calculateurs' ? 'active' : '' ?>"  href="calculators.php">Calculateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'autres' ? 'active' : '' ?>" href="other.php">Autres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assets/session-killer.php">Reset</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
