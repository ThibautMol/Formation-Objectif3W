<?php
$name='Sony';

function greetings(&$name){
    $name='Olivier';
    echo "Hello $name";
}

greetings($name);