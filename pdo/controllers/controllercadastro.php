


<?php
         

include "../includes/variaveis.php";
include"../class/ClassCrud.php";



$crud = new ClassCrud();

if($acao == 'cadastrar'){
    $crud->insertDB("cadastro","?,?,?,?", array($id,$nome,$sexo,$cidade) );
echo"cadastro realizado com sucesso";
    
}else{
    $crud->updateDB("cadastro", "nome=?,sexo=?,cidade=?", "id=?", array($nome,$sexo,$cidade,$id));
    echo"alteração realizada com sucesso";
}

?>
 