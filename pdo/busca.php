
<?php
include 'includes/header.php';
include 'class/ClassCrud.php';
include 'includes/variaveis.php';

if (isset($n)) {
    $acaosexo = "none;";
}

if (isset($s)) {
    $acaonome = "none;";
}
?>




<div class="fnome">
    <form class="FormularioInput100 FormularioInput" method="get" action="controllers/controllerbusca.php" id="formNome" name="formNome">     
        <span class="tituloTabela">Busca por nome:</span> <input type="text" name="busca" id="busca" placeholder="insira o nome"/>
        <input name="n" type="submit" value="BUSCAR"/>
    </form>
  
<script src="includes/zepto.min.js"></script>
<script src="Javascript.js"></script>
</div>
<div class="Resultado" id="ResultadoNome"></div>

  
<div class="fsexo">
    <form class="FormularioInput100 FormularioInput" method="get" action="controllers/controllerbusca.php" id="formSexo" name="formSexo">     
        <span class="tituloTabela">Busca por sexo:</span> <input type="text" name="bsexo" id="bsexo" placeholder="insira o sexo"/>
        <input name="s" type="submit" value="BUSCAR"/>
    </form></div>
<div class="Resultado" id="ResultadoSexo"></div>
 
<script src="includes/zepto.min.js"></script>
<script src="Javascript.js"></script>



    <?php
    include 'includes/footer.php';
    ?>