<?php

$datas= [
    ['letter' => 'a', 'goto'=>10], //index 0 
    ['letter' => 'e', 'goto'=>-1], // index 1
    ['letter' => 'e', 'goto'=>6],  // index 2
    ['letter' => 'l', 'goto'=>1], // index 3
    ['letter' => 'p', 'goto'=>8], // index 4  
    ['letter' => 'o', 'goto'=>11], // index 5  
    ['letter' => 'x', 'goto'=>12], // index 6
    ['letter' => 'p', 'goto'=>3], // index 7
    ['letter' => 'r', 'goto'=>5], // index 8 
    ['letter' => 'm', 'goto'=>7], // index 9
    ['letter' => 'b', 'goto'=>3], // index 10 
    ['letter' => 'b', 'goto'=>0], // index 11 
    ['letter' => 'a', 'goto'=>9], // index 12
];

readline('entrez votre mère : ', $test);

function aaa(int $index)
        {
            $word = "";
            while ($index != -1) {
                $word = $word . $datas[$index]['letter'];
                $index = $datas[$index]['goto'];
            }
            var_dump ($word);
        }


aaa($test);

