<?php
include 'class/ClassCrud.php';


//edicao de dados
if(isset($_GET['id'])){
    $acao = "editar";
$crud = new ClassCrud();
  
$BFetch = $crud->selectDB("*","cadastro","where id=?",array($_GET['id']));

$Fetch =$BFetch->fetch(PDO::FETCH_ASSOC);
$nome= $Fetch['nome'];
$id= $Fetch['id'];
$sexo= $Fetch['sexo'];
$cidade= $Fetch['cidade'];


//cadastro novo            
} else {
    $acao="cadastrar";
    $nome="";
    $id= 0;
    $sexo="";
    $cidade="";
}

?> 

<div class="Resultado"> </div>

    <div class="Formulario">

        <h1 class="Center">Cadastro</h1>

        <form name="FormCadastro" id="FormCadastro" method="post" action="controllers/controllercadastro.php">
            <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>"/>
             <input type="hidden" id="id" name="id" value="<?php echo $id?>"/>
            
            <div class="FormularioInput">
                <span class="tituloTabela"> Nome:</span><br/>
                <input type="text" id="nome" name="nome" value="<?php echo $nome?>"/>            
            </div>

            <div class="FormularioInput">
                <span class="tituloTabela"> Sexo:</span><br/>
                <select name="sexo" id="sexo">
                    <option value="<?php echo $sexo?>"><?php echo $sexo?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>      
            </div>

            <div class="FormularioInput">
                <span class="tituloTabela"> Cidade:</span><br/>
                <input type="text" id="cidade" name="cidade" value="<?php echo $cidade?>"/>            
            </div>

            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="<?php echo $acao?>"/>            
            </div>

        </form>           

        <script src="includes/zepto.min.js"></script>
        <script src="Javascript.js"></script>

    </div>      