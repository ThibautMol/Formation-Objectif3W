<nav class="navbar  navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cours</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'users' ? 'active' : '' ?>"  href="usersList.php">Utilisateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'cards' ? 'active' : '' ?>" href="cardsList.php">Cartes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'boards' ? 'active' : '' ?>" href="boardsList.php">Plateaux</a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="post" action="search.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <select class="form-select me-2" aria-label="Default select example" name="filter">
          <option selected value="all">All</option>
          <option value="user" >Users</option>
          <option value="card">Cards</option>
          <option value="board">Boards</option>
        </select>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
