<?php

$_GET['classroom']='';
$_GET['role']=NULL;

if (!isset($_GET['classroom'])) {
    echo "c est bon";
}
else {
    echo "t'as merdé";
}
?>



<?=(isset($_GET['role'])) ? "&role=$_GET[role]" : '';?>