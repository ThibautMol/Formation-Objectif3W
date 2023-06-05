<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='liste des utilisateurs'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
<?php require_once ("./assets/functions/all-user-list-generation.php")?>


<main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">
  
  <h1 class="display-1 text-center my-5">Liste des Utilisateurs</h1>
  <div>
    <a class="btn btn-primary justify-content-start" href="creation-user.php">Ajouter un utilisateur</a>
  </div>
  
  <div class="d-flex container-fluid justify-content-end mt-3">    
    <div class="d-flex justify-content-end">
      <form class="me-2" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div>


  

  <h2 class="d-flex justify-content-center">Filtres</h2>

  <form action="" method="GET" class="d-flex">

    <div class="mx-1">
      <select class="form-select" aria-label="Default select example">
        <option selected>Rôle</option>
        <option class="text-capitalize" value="administrateur">administrateur</option>
        <option class="text-capitalize" value="agent de traitement">agent de traitement</option>
        <option class="text-capitalize" value="professeur">professeur</option>
        <option class="text-capitalize" value="eleve">élève</option>
      </select>
    </div>

    <div class="mx-1">
      <select class="form-select" aria-label="Default select example">
        <option selected>Classe principale</option>
        <option class="text-capitalize" value="class1">class1</option>
        <option class="text-capitalize" value="class2">class2</option>
        <option class="text-capitalize" value="class3">class3</option>
        <option class="text-capitalize" value="class4">class4</option>
        <option class="text-capitalize" value="class5">class5</option>
      </select>
    </div>

    <div class="mx-1">
      <select class="form-select" aria-label="Default select example">
        <option selected>Classe secondaire</option>
        <option class="text-capitalize" value="class1">class1</option>
        <option class="text-capitalize" value="class2">class2</option>
        <option class="text-capitalize" value="class3">class3</option>
        <option class="text-capitalize" value="class4">class4</option>
        <option class="text-capitalize" value="class5">class5</option>
      </select>
    </div>

  </form>
  <button type="submit" class="btn btn-primary mt-3">Filtrer</button>

  <?php
    $USER_PER_PAGE=5;
    $total_users=count($all_profil_user);
    $pageCourante=isset($_GET['page']) ? $_GET['page'] : 1;
    $number_of_pages=ceil($total_users/$USER_PER_PAGE);
  ?>
  <?php $start_index=($pageCourante-1)*$USER_PER_PAGE;?>
  <?php $users_on_page=array_slice($all_profil_user,$start_index,$USER_PER_PAGE);?>

  <table class="table container-xxl">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">UserPwd</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Statut</th>
        <th scope="col">Classroom</th>
        <th scope="col">CreationAccount</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users_on_page as $user) :?>
          <tr>
              <th scope="row"><?=$user['id']?></th>
              <td><?=$user['email']?></td>
              <td><?=$user['UserPwd']?></td>
              <td class="text-capitalize"><?=$user['firstname']?></td>
              <td class="text-capitalize"><?=$user['lastname']?></td>
              <td class="text-capitalize"><?=$user['statut']?></td>  
              <td class="text-capitalize"><?=$user['classroom']?></td>
              <td><?=$user['CreationAccount']?></td>    
          </tr>
      <?php endforeach ;?>
    </tbody>
  </table>
  <p>Utilisateurs <?= $USER_PER_PAGE*$pageCourante ?> - <?= $total_users ?></p>
  <?php //if ((isset($_POST)) && ($_POST['user_per_page']!=NULL)) {$user_per_page=$_POST['user_per_page'];} // stocker resultat dans $_SESSION?>
  <div class="d-flex">
    <form action="" method="POST">  
      <div class="mx-1">
        <select class="form-select" name="user_per_page" aria-label="Default select example">
          <option class="text-capitalize" value="5" selected>5</option>
          <option class="text-capitalize" value="15">15</option>
          <option class="text-capitalize" value="30">30</option>
          <option class="text-capitalize" value="">Tous</option>
        </select>
      </div>
    </form>
    <button type="submit" class="btn btn-primary">choisir</button>
  </div>

</main>


<nav class="d-flex justify-content-center" aria-label="...">
  <ul class="pagination">
    <li class="mx-1">
      <a class="page-link <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=(1);?>">|<</a>
    </li>
    <li class="mx-1">
      <a class="page-link <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=($pageCourante-1);?>"><</a>
    </li>
    <li class="mx-1<?= $pageCourante <= ($i+2) ? 'd-none' : '' ?>">
      <a class="page-link disabled" href="?page=<?=($pageCourante-1);?>">...</a>
    </li>
    <?php for ($i=1; $i<=$number_of_pages;$i++): ?>
      <li class="page-item mx-1 <?= $pageCourante == $i ? 'active' : ''?> <?= ($i < $pageCourante-1) || ($i > $pageCourante+1) ?'d-none' : '' ;?>"><a class="page-link" href="?page=<?= $i?>"><?=$i?></a></li>
    <?php endfor?>
    
    <li class="mx-1 <?= ( $pageCourante < $number_of_pages-1) ? '' : 'd-none' ?>">
      <a class="page-link disabled" href="?page=<?=($pageCourante+1);?>">...</a>
    </li>
    <li class="mx-1">
      <a class="page-link <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" href="?page=<?=($pageCourante+1);?>">></a>
    </li>
    <li class="mx-1">
      <a class="page-link <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" href="?page=<?=($number_of_pages);?>">>|</a>
    </li>
  </ul>
</nav>

<?php require_once ("./assets/inc/foot.php") ?>