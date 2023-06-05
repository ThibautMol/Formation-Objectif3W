<?php 
//  require 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\head.php'; 
//  require 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\navbar.php';

$index=NULL;

function written_path ($index) {
    $index=$_POST['goto'];
    $result=NULL;
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

    
        while ($index!=-1){
            
            ($datas[$index]['goto']==$index);             
            $result.=$datas[$index]['letter'];
            $index=$datas[$index]['goto'];
                
        }

    return $result;
}
?>

<form action="" method="post" class="mt-5 ms-5">
    <input type="number" name="goto"/>
    <button type="submit">Validez</button>
</form>

<?php if (isset($_POST) && ($_POST!=NULL)) {
    echo(written_path($index));
}?>