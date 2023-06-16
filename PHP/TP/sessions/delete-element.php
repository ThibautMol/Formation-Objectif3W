<?php
session_start();

?>



<?php 

foreach ($_POST as $data) {
    
    unset($_SESSION['course'][$data]);
    
}



$_SESSION['course'] = array_merge($_SESSION['course']);
?>
<pre><?=var_dump($_SESSION['course']);?></pre>

<?php header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/liste-de-courses.php');
  exit;
?>