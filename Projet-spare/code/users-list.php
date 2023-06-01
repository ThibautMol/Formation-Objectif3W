<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='liste des utilisateurs'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
   

    <main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">

      <div class="container-fluid mt-3">
        <div class="row">
            <div class="span12 d-flex justify-content-end">
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
              </form>
            </div>
        </div>
       <a class="btn btn-primary justify-content-start" href="creation-user.php">Ajouter un utilisateur</a>
      </div>

      <h2 class="d-flex justify-content-center">Filtres</h2>

      <div class="d-flex justify-content-center">

        <div class="dropdown m-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Clan
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Humain</a></li>
            <li><a class="dropdown-item" href="#">REI</a></li>
          </ul>
        </div>

        <div class="dropdown m-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Type
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Bête</a></li>
            <li><a class="dropdown-item" href="#">Esprit</a></li>
            <li><a class="dropdown-item" href="#">Humain</a></li>
            <li><a class="dropdown-item" href="#">Monstre</a></li>
          </ul>
        </div>

        <div class="dropdown m-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Catégorie
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Serviteur</a></li>
            <li><a class="dropdown-item" href="#">Sort</a></li>
            <li><a class="dropdown-item" href="#">Héro</a></li>
          </ul>
        </div>

        <div class="dropdown m-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Fonction</button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Attaque</a></li>
            <li><a class="dropdown-item" href="#">Défense</a></li>
            <li><a class="dropdown-item" href="#">Vie</a></li>
            <li><a class="dropdown-item" href="#">Boost</a></li>
          </ul>
        </div>

        <div class="dropdown m-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Rareté
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Légendaire</a></li>
            <li><a class="dropdown-item" href="#">Epique</a></li>
            <li><a class="dropdown-item" href="#">Rare</a></li>
            <li><a class="dropdown-item" href="#">Commune</a></li>
            <li><a class="dropdown-item" href="#">Basique</a></li>
          </ul>
        </div>

      </div>

      <h1 class=" row justify-content-center">Cartes</h1>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Clan</th>
              <th scope="col">Nom</th>
              <th scope="col">Type</th>
              <th scope="col">Catégorie</th>
              <th scope="col">Fonction</th>
              <th scope="col">Rareté</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#C1447</td>
              <td>Humain</td>
              <td>Aversio</td>
              <td>Bête</td>
              <td>Serviteur</td>
              <td>Attaque</td>
              <td>Epique</td>
              <td>**</td>
            </tr>
            <tr>
              <td>#C0081</td>
              <td>Humain</td>
              <td>Kick Drum</td>
              <td>Esprit</td>
              <td>Sort</td>
              <td>Défense</td>
              <td>Légendaire</td>
              <td>**</td>
            </tr>
            <tr>
              <td>#C1321</td>
              <td>Humain</td>
              <td>Fao</td>
              <td>Humain</td>
              <td>Héro</td>
              <td>Vie</td>
              <td>Rare</td>
              <td>**</td>
            </tr>
            <tr>
              <td>#C0247</td>
              <td>REI</td>
              <td>Sanmao</td>
              <td>Monstre</td>
              <td>Serviteur</td>
              <td>Boost</td>
              <td>Commune</td>
              <td>**</td>
            </tr>
            <tr>
              <td>#C0007</td>
              <td>REI</td>
              <td>Muladhara</td>
              <td>Esprit</td>
              <td>Sort</td>
              <td>Attaque/boost</td>
              <td>Basique</td>
              <td>**</td>
            </tr>
            <tr>
              <td>#C1447</td>
              <td>Humain</td>
              <td>Aversio</td>
              <td>Bête</td>
              <td>Serviteur</td>
              <td>Attaque</td>
              <td>Epique</td>
              <td>**</td>
            </tr>
            
          </tbody>
        </table>
      </div>

    </main>


    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

<?php require_once ("./assets/inc/foot.php") ?>