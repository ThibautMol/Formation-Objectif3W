<?php 
 require 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\head.php'; 
 require 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\navbar.php';




$index=$_POST['goto'];
var_dump($_POST);
var_dump($index);
function written_path ($index) {
    $result=NULL;
    $datas= [
        ['letter' => 'a', 'goto'=>10], //index 0
        ['letter' => 'e', 'goto'=>-1], // index 1
        ['letter' => 'e', 'goto'=>6],
        ['letter' => 'l', 'goto'=>1],
        ['letter' => 'p', 'goto'=>8],
        ['letter' => 'o', 'goto'=>11],
        ['letter' => 'x', 'goto'=>12],
        ['letter' => 'p', 'goto'=>3],
        ['letter' => 'r', 'goto'=>5],
        ['letter' => 'm', 'goto'=>7],
        ['letter' => 'b', 'goto'=>4],
        ['letter' => 'b', 'goto'=>0],
        ['letter' => 'a', 'goto'=>9],
    ];

    
        while ($index!=-1){
            
                ($datas[$index]['goto']==$index);
                    // si $data['goto']==$index => 3 == 3
                    
                    $result.=$datas[$index]['letter'];
                    $index=$datas[$index]['goto'];
                
            }
            var_dump($index);

        
    

    // foreach ($datas as $data) {
    //     if ($data['goto']===$index['goto']){
    //         $result.=$element['letter'];
    //     }
    // }
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




<?php 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\foot.php';?>