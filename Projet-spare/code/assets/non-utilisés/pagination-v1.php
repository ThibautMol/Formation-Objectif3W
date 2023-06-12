
<nav class="d-flex justify-content-center" aria-label="...">
  <ul class="pagination">
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante == 1 ? 'disabled' : '' ?>" >|<</a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante == 1 ? 'disabled' : '' ?>" 
        href="?page=<?=1;?><?=(isset($_GET['role'])) ? "&role=".$_GET['role'] : '';?><?=(isset($_GET['classroom'])) ? "&classroom=".$_GET['classroom'] : '';?><?=(isset($_GET['ClassSpe'])) ? "&ClassSpe=".$_GET['ClassSpe'] : '';?>"><</a>
    </li>
    <li class="mx-1 <?= $pageCourante <= ($i+2) ? 'd-none' : '' ?>">
      <a class="page-link disabled btn" href="?page=<?=($pageCourante-1)?>">...</a>
    </li>
    <?php for ($i=1; $i<=$number_of_pages;$i++): ?>
      <li class="page-item mx-1 <?= $pageCourante == $i ? 'active' : ''?> <?= ($i < $pageCourante-1) || ($i > $pageCourante+1) ?'d-none' : '' ;?>"><a class="page-link btn" 
        href="?page=<?=$i?><?=(isset($_GET['role'])) ? "&role=".$_GET['role'] : '';?><?=(isset($_GET['classroom'])) ? "&classroom=".$_GET['classroom'] : '';?><?=(isset($_GET['ClassSpe'])) ? "&ClassSpe=".$_GET['ClassSpe'] : '';?>"><?=$i?></a></li>
    <?php endfor?>
    
    <li class="mx-1 <?= ( $pageCourante < $number_of_pages-1) ? '' : 'd-none' ?>">
      <a class="page-link disabled btn" href="?page=<?=($pageCourante+1)?>">...</a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" 
        href="?page=<?=($pageCourante+1);?><?=(isset($_GET['role']))?"&role=".$_GET['role'] :'';?><?=(isset($_GET['classroom'])) ? "&classroom=".$_GET['classroom'] : '';?><?=(isset($_GET['ClassSpe'])) ? "&ClassSpe=".$_GET['ClassSpe'] : "";?>">></a>
    </li>
    <li class="mx-1">
      <a class="page-link btn <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" 
        href="?page=<?=($number_of_pages);?><?=(isset($_GET['role'])) ? "&role=".$_GET['role'] : '';?><?=(isset($_GET['classroom'])) ? "&classroom=".$_GET['classroom'] : '';?><?=(isset($_GET['ClassSpe'])) ? "&ClassSpe=".$_GET['ClassSpe'] : "";?>">>|</a>
    </li>
  </ul>
</nav>

