<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='liste des utilisateurs'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
<?php require_once ("./assets/functions/all-user-list-generation.php")?>

<?php 

  if (isset($_POST['user_per_page'])) {
    $_SESSION['user_per_page']=$_POST['user_per_page'];
  }
  
  if (isset($_SESSION['user_per_page'])) {
    if ($_SESSION['user_per_page']=='') {
      $user_per_page=99999;
    }
    else {
    $user_per_page=$_SESSION['user_per_page'];
    settype($user_per_page, 'integer');
    }
  } 
  else {$user_per_page=5;}
  
  $total_users=count($all_profil_user);
  $pageCourante=isset($_GET['page']) ? $_GET['page'] : 1;
  $number_of_pages=ceil($total_users/$user_per_page);
 
  $start_index=($pageCourante-1)*$user_per_page;
  $users_on_page=array_slice($all_profil_user,$start_index,$user_per_page);
?>




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

  <form class="d-flex flex-column" action="" method="GET" class="d-flex">
    <div class="d-flex flex-row justify-content-center">
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
          <option class="text-capitalize" value="class1-1">class1-1</option>
          <option class="text-capitalize" value="class1-2">class1-2</option>
          <option class="text-capitalize" value="class1-3">class1-3</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3 mx-auto">Filtrer</button>
  </form>
  

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
        <th scope="col">Classe Spécialité</th>
        <th scope="col">CreationAccount</th>
        <th scope="col">Actions</th>
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
            <td><a class="btn btn-primary" href="view-user.php?id=<?=$user['id']?>"><i class="bi bi-eye-fill"></i></a> 
            <a class="btn btn-secondary" href="profil-user-edit.php?id=<?=$user['id']?>"><i class="bi bi-pencil-square"></i></a> 
            <a class="btn btn-danger" href="profil-user-edit.php?id=<?=$user['id']?>"><i class="bi bi-trash3-fill"></i></a></td>
          </div>   
        </tr>
        
      <?php endforeach ;?>
    </tbody>
  </table> 
 
  <p>Utilisateurs <?=($total_users<=$user_per_page) ? $total_users . " - " . $total_users : $user_per_page*$pageCourante . " - " . $total_users; ?></p>
  


  <div class="d-flex">
    <form action="users-list.php" method="POST">  
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