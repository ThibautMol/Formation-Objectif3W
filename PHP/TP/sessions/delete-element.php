<?php
session_start();

var_dump($_POST);



?>



<?php 

foreach ($_POST as $data) {
    
    unset($_SESSION['course'][$data]);
    
}
?>
<pre><?=var_dump($_SESSION['course']);?></pre>

<?php //header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/liste-de-courses.php');
  //exit;
?>