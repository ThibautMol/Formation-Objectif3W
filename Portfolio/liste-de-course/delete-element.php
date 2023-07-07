<?php
session_start();

?>



<?php 

foreach ($_POST as $data) {
    
    unset($_SESSION['course'][$data]);
    
}


$_SESSION['course'] = array_merge($_SESSION['course']);
?>

<?php header('Location: '.$_SERVER['HTTP_REFERER']); exit;
?>