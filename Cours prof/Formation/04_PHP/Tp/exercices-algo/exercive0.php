<?php

$a = 2; 
$b = 5;

echo "A vaut actuellement $a et B vaut actuellement $b\n";

// Solution 1
$c = $a; // $c = 2
$a = $b; // $a = 5
$b = $c; // $b = 2

// Solution 2
$a = $a + $b; // $a = 7 
$b = $a - $b;// $b = 7 - 5 donc $b = 2
$a = $a -$b; // $a = 7 - 2 donc $a = 5

echo "après l'échange A vaut $a et B vaut $b\n";