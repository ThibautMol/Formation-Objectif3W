<?php session_start(); ?>
<?php require_once ("./assets/functions/auto-return-login-if-not-logged.php") ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='liste des utilisateurs'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>
<?php require_once ("./assets/inc/mysql-profil-user-request.php")?>
<?php require_once ("./assets/functions/user-per-page-list.php");?>
<?php require_once ("./assets/functions/user-list-filter.php");?>
<?php require_once ("./assets/inc/mysql-all-spe-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-main-classes-request.php")?>
<?php require_once ("./assets/inc/mysql-all-roles-request.php")?>
<?php  

  isset($_SESSION['SPARE']['user_on_page']) ? $user_per_page=$_SESSION['SPARE']['user_on_page']=$_POST['user_per_page'] : "5";
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
          <?php foreach ($all_roles as $role) :?>
            <option class="text-capitalize" value="<?=$role['name']?>" <?=((!empty($_GET['role'])) && ($_GET['role']==$role['name'])) ? 'selected' : ''?>><?=$role['name']?></option>
          <?php endforeach ;?>
        </select>
      </div>

                              

      <div class="mx-1">
        <select name="classroom" class="form-select" aria-label="Default select example">
          <option value="0" selected>Classe principale</option>
          <?php foreach ($all_main_classes as $main_class) :?>
            <option class="text-capitalize" value="<?=$main_class['name']?>" <?=((!empty($_GET['classroom'])) && ($_GET['classroom']==$main_class['name'])) ? 'selected' : ''?>><?=$main_class['name']?></option>
          <?php endforeach ;?>      
        </select>
      </div>

      <div class="mx-1 mb-2">
        <select name="ClassSpe" class="form-select" aria-label="Default select example">
          <option value="0" selected>Classe secondaire</option>
          <?php foreach ($all_spe_classes as $spe_class) :?>
            <option class="text-capitalize" value="<?=$spe_class['name']?>" <?=((!empty($_GET['ClassSpe'])) && ($_GET['ClassSpe']==$spe_class['name'])) ? 'selected' : ''?>><?=$spe_class['name']?></option>
          <?php endforeach ;?>        
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

<?php 
  $role = (isset($_GET['role'])) ? "&role=".$_GET['role'] : '';
  $classroom = (isset($_GET['classroom'])) ? "&classroom=".$_GET['classroom'] : '';
  $ClassSpe = (isset($_GET['ClassSpe'])) ? "&ClassSpe=".$_GET['ClassSpe'] : '';
  ?>

<nav class="d-flex justify-content-center" aria-label="..." style="margin-bottom:100px;">
  <ul class="pagination">
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=1;?><?=$role?><?=$classroom?><?=$ClassSpe?>">|<</a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante == 1 ? 'disabled' : '' ?>" 
        href="?page=<?=($pageCourante-1);?><?=$role?><?=$classroom?><?=$ClassSpe?>"><</a>
    </li>
    <li class="mx-1 <?= $pageCourante <= ($i+2) ? 'd-none' : '' ?>">
      <a class="page-link disabled btn" href="?page=<?=($pageCourante-1)?>">...</a>
    </li>
    <?php for ($i=1; $i<=$number_of_pages;$i++): ?>
      <li class="page-item mx-1 <?= $pageCourante == $i ? 'active' : ''?> <?= ($i < $pageCourante-1) || ($i > $pageCourante+1) ?'d-none' : '' ;?>"><a class="page-link btn" 
        href="?page=<?=$i?><?=$role?><?=$classroom?><?=$ClassSpe?>"><?=$i?></a></li>
    <?php endfor?>
    
    <li class="mx-1 <?= ( $pageCourante < $number_of_pages-1) ? '' : 'd-none' ?>">
      <a class="page-link disabled btn" href="?page=<?=($pageCourante+1)?>">...</a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" 
        href="?page=<?=($pageCourante+1);?><?=$role?><?=$classroom?><?=$ClassSpe?>">></a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" 
        href="?page=<?=($number_of_pages);?><?=$role?><?=$classroom?><?=$ClassSpe?>">>|</a>
    </li>
  </ul>
</nav>



<?php require_once ("./assets/inc/foot.php") ?>

