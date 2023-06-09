<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='liste des utilisateurs'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
<?php require_once (".\assets\inc\mysql-profil-user-request.php")?>
<?php require_once ("./assets/functions/user-per-page-list.php");?>
<?php require_once ("./assets/functions/user-list-filter.php");?>
<?php  

  $total_users=count($all_profil_user);
  $pageCourante=isset($_GET['page']) ? $_GET['page'] : 1;
  $number_of_pages=ceil($total_users/$user_per_page);
 
  $start_index=($pageCourante-1)*$user_per_page;
  $users_on_page=array_slice($all_profil_user,$start_index,$user_per_page);
?>



<main class="d-flex flex-column justify-content-center align-items-center mb-5 mx-5" style="margin-top:100px;">
  
  <h1 class="display-1 text-center my-5">Liste des Utilisateurs</h1>
  <div>
    <a class="btn btn-primary justify-content-start" href="creation-user.php">Ajouter un utilisateur</a>
  </div>
  
  <div class="d-flex container-fluid justify-content-end mt-4">    
    <div class="d-flex justify-content-end">
      <form class="me-2" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div>
  
  <h2 class="d-flex justify-content-center">Filtres</h2>
  
  <form class="d-flex flex-column my-3" action="" method="GET" class="d-flex">
    <div class="d-flex flex-row justify-content-center">
      <div class="mx-1">
        <select name="role" class="form-select" aria-label="Default select example">
          <option value="0" selected>Rôle</option>
          <option class="text-capitalize" value="administrateur" <?=((!empty($_GET['role'])) && ($_GET['role']=="administrateur")) ? 'selected' : ''?>>administrateur</option>
          <option class="text-capitalize" value="agent de traitement" <?=((!empty($_GET['role'])) && ($_GET['role']=="agent de traitement")) ? 'selected' : ''?>>agent de traitement</option>
          <option class="text-capitalize" value="professeur" <?=((!empty($_GET['role'])) && ($_GET['role']=="professeur")) ? 'selected' : ''?>>professeur</option>
          <option class="text-capitalize" value="eleve" <?=((!empty($_GET['role'])) && ($_GET['role']=="eleve")) ? 'selected' : ''?>>élève</option>
        </select>
      </div>

      <div class="mx-1">
        <select name="classroom" class="form-select" aria-label="Default select example">
          <option value="0" selected>Classe principale</option>
          <option class="text-capitalize" value="class1" <?=((!empty($_GET['classroom'])) && ($_GET['classroom']=="class1")) ? 'selected' : ''?>>class1</option>
          <option class="text-capitalize" value="class2" <?=((!empty($_GET['classroom'])) && ($_GET['classroom']=="class2")) ? 'selected' : ''?>>class2</option>
          <option class="text-capitalize" value="class3" <?=((!empty($_GET['classroom'])) && ($_GET['classroom']=="class3")) ? 'selected' : ''?>>class3</option>
          <option class="text-capitalize" value="class4" <?=((!empty($_GET['classroom'])) && ($_GET['classroom']=="class4")) ? 'selected' : ''?>>class4</option>
          <option class="text-capitalize" value="class5" <?=((!empty($_GET['classroom'])) && ($_GET['classroom']=="class5")) ? 'selected' : ''?>>class5</option>
        </select>
      </div>

      <div class="mx-1 mb-2">
        <select name="ClassSpe" class="form-select" aria-label="Default select example">
          <option value="0" selected>Classe secondaire</option>
          <option class="text-capitalize" value="class1-1" <?=((!empty($_GET['ClassSpe'])) && ($_GET['ClassSpe']=="class1-1")) ? 'selected' : ''?>>class1-1</option>
          <option class="text-capitalize" value="class1-2" <?=((!empty($_GET['ClassSpe'])) && ($_GET['ClassSpe']=="class1-2")) ? 'selected' : ''?>>class1-2</option>
          <option class="text-capitalize" value="class1-3" <?=((!empty($_GET['ClassSpe'])) && ($_GET['ClassSpe']=="class1-3")) ? 'selected' : ''?>>class1-3</option>
        </select>
      </div>
    </div>
    <div class="mx-auto">
      <button type="submit" class="btn btn-primary">Filtrer</button>
      <a href="users-list.php" class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i></a>
    </div>
  </form>
  

  <table class="table table-striped container-fluid">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">UserPwd</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Statut</th>
        <th scope="col">Classroom</th>
        <th scope="col">Classe Spécialité</th>
        <th scope="col">CreationAccount</th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users_on_page as $user) :?>
      
        <tr>
          <div>
            <th><?=$user['id']?></th>
            <td><?=$user['email']?></td>
            <td><?=$user['UserPwd']?></td>
            <td><?=$user['firstname']?></td>
            <td><?=$user['lastname']?></td>
            <td><?=$user['statut']?></td>
            <td><?=(empty($user['classroom'])) ? "" : $user['classroom']?></td>
            <td><?=(empty($user['ClassSpe'])) ? "" : $user['ClassSpe']?></td>
            <td><?=$user['CreationAccount']?></td>
            <td class="d-flex justify-content-around mw-25"><a class="btn btn-primary" href="view-user.php?id=<?=$user['id']?>"><i class="bi bi-eye-fill"></i></a> 
            <a class="btn btn-secondary" href="profil-user-edit.php?id=<?=$user['id']?>"><i class="bi bi-pencil-square"></i></a> 
            <a class="btn btn-danger" href="profil-user-edit.php?id=<?=$user['id']?>"><i class="bi bi-trash3-fill"></i></a></td>
          </div>   
        </tr>
        
      <?php endforeach ;?>
    </tbody>
  </table> 
 
  <p>Utilisateurs <?=($total_users<=$user_per_page) ? $total_users . " - " . $total_users : $user_per_page*$pageCourante . " - " . $total_users; ?></p>
  
  <div class="d-flex">
    <form class="d-flex" action="users-list.php" method="POST">  
      <div class="mx-1">
        <select class="form-select" name="user_per_page" aria-label="Default select example">
          
          <option class="text-capitalize" value="5" <?=($user_per_page==5)?"selected":""?>>5</option>
          <option class="text-capitalize" value="15" <?=($user_per_page==15)?"selected":""?>>15</option>
          <option class="text-capitalize" value="30" <?=($user_per_page==30)?"selected":""?>>30</option>
          <option class="text-capitalize" value="" <?=($user_per_page==99999)?"selected":""?>>Tous</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">choisir</button>
    </form>
    
  </div>

</main>


<nav class="d-flex justify-content-center" aria-label="...">
  <ul class="pagination">
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=(1);?>">|<</a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=($pageCourante-1);?>"><</a>
    </li>
    <li class="mx-1 <?= $pageCourante <= ($i+2) ? 'd-none' : '' ?>">
      <a class="page-link disabled btn" href="?page=<?=($pageCourante-1);?>">...</a>
    </li>
    <?php for ($i=1; $i<=$number_of_pages;$i++): ?>
      <li class="page-item mx-1 <?= $pageCourante == $i ? 'active' : ''?> <?= ($i < $pageCourante-1) || ($i > $pageCourante+1) ?'d-none' : '' ;?>"><a class="page-link btn" href="?page=<?= $i?>"><?=$i?></a></li>
    <?php endfor?>
    
    <li class="mx-1 <?= ( $pageCourante < $number_of_pages-1) ? '' : 'd-none' ?>">
      <a class="page-link disabled btn" href="?page=<?=($pageCourante+1);?>">...</a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" href="?page=<?=($pageCourante+1);?>">></a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" href="?page=<?=($number_of_pages);?>">>|</a>
    </li>
  </ul>
</nav>

<?php require_once ("./assets/inc/foot.php") ?>