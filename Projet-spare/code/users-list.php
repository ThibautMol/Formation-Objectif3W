<?php session_start(); ?>
<?php require ("./assets/inc/cookies.php")?>
<?php $title='liste des utilisateurs'?>
<?php $current_page="utilisateurs"?>
<?php require_once ("./assets/inc/head.php")?>
<?php require_once ("./assets/inc/nav-bar.php")?>



<?php
  $users = [
      [
        'id' => 1,
        'name' => 'Sony',
        'job' => 'Chômeur',
        'hobby' => 'DROP DATABASE'
      ],
      [
        'id'=> 2,
        'name' => 'Olivier',
        'job' => 'Homme de joie',
        'hobby' => 'Croziflette'
      ],
      [
        'id'=> 3,
        'name' => 'Adrien',
        'job' => 'En prison',
        'hobby' => 'savonette peau sensible'
      ],
      [
        'id' => 4,
        'name' => 'Arturo',
        'job' => 'Designer(bientot Dev)',
        'hobby' => 'Bootstrap'
      ],
      [
        'id'=> 5,
        'name' => 'Guillaume',
        'job' => 'Ninja',
        'hobby' => 'PHP'
      ],
      [
        'id'=> 6,
        'name' => 'Thibaut',
        'job' => 'Pythoniste',
        'hobby' => 'Mets Adrien en prison'
      ],
      [
        'id'=> 7,
        'name' => 'Fabrice',
        'job' => 'éparpilleur',
        'hobby' => 'Se perdre'
      ],
      [
        'id' => 8,
        'name' => 'Boubacar',
        'job' => 'Documentaliste',
        'hobby' => 'La DOC'
      ],
      [
        'id'=> 9,
        'name' => 'Virginie',
        'job' => 'Epicier',
        'hobby' => 'Cherche son ordi'
      ],
      [
        'id'=> 10,
        'name' => 'Anne',
        'job' => 'Dealer de bonbon',
        'hobby' => 'Les arlequins et les bétises'
      ],
      [
        'id'=> 11,
        'name' => 'Benjamin',
        'job' => 'Casper',
        'hobby' => 'Absent, j\'ai mécanique'
      ],
      [
        'id'=> 12,
        'name' => 'Mickael',
        'job' => 'Le chineur',
        'hobby' => 'Les bons tuyaux'
      ],
      [
        'id'=> 13,
        'name' => 'Ryan',
        'job' => 'Le jeunot',
        'hobby' => 'Découvre la vie'
      ],
      [
        'id' => 14,
        'name' => 'Désirée',
        'job' => 'Reine des ternaires',
        'hobby' => 'Les ternaires c\'est la vie'
      ],
      [
        'id'=> 15,
        'name' => 'Dhéya',
        'job' => 'Nimois',
        'hobby' => 'J\'adore les pauses'
      ],
      [
        'id' => 16,
        'name' => 'Sony',
        'job' => 'Chômeur',
        'hobby' => 'DROP DATABASE'
      ],
      [
        'id'=> 17,
        'name' => 'Olivier',
        'job' => 'Homme de joie',
        'hobby' => 'Croziflette'
      ],
      [
        'id'=> 18,
        'name' => 'Adrien',
        'job' => 'En prison',
        'hobby' => 'savonette peau sensible'
      ],
      [
        'id' => 19,
        'name' => 'Arturo',
        'job' => 'Designer(bientot Dev)',
        'hobby' => 'Bootstrap'
      ],
      [
        'id'=> 20,
        'name' => 'Guillaume',
        'job' => 'Ninja',
        'hobby' => 'PHP'
      ],
      [
        'id'=> 21,
        'name' => 'Thibaut',
        'job' => 'Pythoniste',
        'hobby' => 'Mets Adrien en prison'
      ],
      [
        'id'=> 22,
        'name' => 'Fabrice',
        'job' => 'éparpilleur',
        'hobby' => 'Se perdre'
      ],
      [
        'id' => 23,
        'name' => 'Boubacar',
        'job' => 'Documentaliste',
        'hobby' => 'La DOC'
      ],
      [
        'id'=> 24,
        'name' => 'Virginie',
        'job' => 'Epicier',
        'hobby' => 'Cherche son ordi'
      ],
      [
        'id'=> 25,
        'name' => 'Anne',
        'job' => 'Dealer de bonbon',
        'hobby' => 'Les arlequins et les bétises'
      ],
      [
        'id'=> 26,
        'name' => 'Benjamin',
        'job' => 'Casper',
        'hobby' => 'Absent, j\'ai mécanique'
      ],
      [
        'id'=> 27,
        'name' => 'Mickael',
        'job' => 'Le chineur',
        'hobby' => 'Les bons tuyaux'
      ],
      [
        'id'=> 28,
        'name' => 'Ryan',
        'job' => 'Le jeunot',
        'hobby' => 'Découvre la vie'
      ],
      [
        'id' => 29,
        'name' => 'Désirée',
        'job' => 'Reine des ternaires',
        'hobby' => 'Les ternaires c\'est la vie'
      ],
      [
        'id'=> 30,
        'name' => 'Dhéya',
        'job' => 'Nimois',
        'hobby' => 'J\'adore les pauses'
      ],
      [
        'id' => 31,
        'name' => 'Sony',
        'job' => 'Chômeur',
        'hobby' => 'DROP DATABASE'
      ],
      [
        'id'=> 32,
        'name' => 'Olivier',
        'job' => 'Homme de joie',
        'hobby' => 'Croziflette'
      ],
      [
        'id'=> 33,
        'name' => 'Adrien',
        'job' => 'En prison',
        'hobby' => 'savonette peau sensible'
      ],
      [
        'id' => 34,
        'name' => 'Arturo',
        'job' => 'Designer(bientot Dev)',
        'hobby' => 'Bootstrap'
      ],
      [
        'id'=> 35,
        'name' => 'Guillaume',
        'job' => 'Ninja',
        'hobby' => 'PHP'
      ],
      [
        'id'=> 36,
        'name' => 'Thibaut',
        'job' => 'Pythoniste',
        'hobby' => 'Mets Adrien en prison'
      ],
      [
        'id'=> 37,
        'name' => 'Fabrice',
        'job' => 'éparpilleur',
        'hobby' => 'Se perdre'
      ],
      [
        'id' => 38,
        'name' => 'Boubacar',
        'job' => 'Documentaliste',
        'hobby' => 'La DOC'
      ],
      [
        'id'=> 39,
        'name' => 'Virginie',
        'job' => 'Epicier',
        'hobby' => 'Cherche son ordi'
      ],
      [
        'id'=> 40,
        'name' => 'Anne',
        'job' => 'Dealer de bonbon',
        'hobby' => 'Les arlequins et les bétises'
      ],
      [
        'id'=> 41,
        'name' => 'Benjamin',
        'job' => 'Casper',
        'hobby' => 'Absent, j\'ai mécanique'
      ],
      [
        'id'=> 42,
        'name' => 'Mickael',
        'job' => 'Le chineur',
        'hobby' => 'Les bons tuyaux'
      ],
      [
        'id'=> 43,
        'name' => 'Ryan',
        'job' => 'Le jeunot',
        'hobby' => 'Découvre la vie'
      ],
      [
        'id' => 44,
        'name' => 'Désirée',
        'job' => 'Reine des ternaires',
        'hobby' => 'Les ternaires c\'est la vie'
      ],
      [
        'id'=> 45,
        'name' => 'Dhéya',
        'job' => 'Nimois',
        'hobby' => 'J\'adore les pauses'
      ],
    
    ];
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
    $total_users=count($users);
    $pageCourante=isset($_GET['page']) ? $_GET['page'] : 1;
    $number_of_pages=ceil($total_users/$USER_PER_PAGE);
  ?>
  <?php $start_index=($pageCourante-1)*$USER_PER_PAGE;?>
  <?php $users_on_page=array_slice($users,$start_index,$USER_PER_PAGE);?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Job</th>
        <th scope="col">Hobby</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users_on_page as $user) :?>
          <tr>
              <th scope="row"><?=$user['id']?></th>
              <td><?=$user['name']?></td>
              <td><?=$user['job']?></td>
              <td><?=$user['hobby']?></td>  
          </tr>
      <?php endforeach ;?>
    </tbody>
  </table>
  <p>Utilisateurs <?= $USER_PER_PAGE*$pageCourante ?> - <?= $total_users ?> </p>

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