<?php include 'includes/header.php';
include 'class/ClassCrud.php';
?>

<div class="Content">

    <?php
    
    $crud = new ClassCrud();
    $IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

    $BFetch = $crud->selectDB("*", "cadastro", "where id=?", array($IdUser));

    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="center"> <h1 >DADOS DO USUARIO</h1> </div>
    <hr><br/>
    <table class="Visualizar">
        <tr>
            <td class="tdVisual"> <strong><span class="tituloTabela">NOME:</span> </strong></td><td><span class="tituloTabela"><?php echo strtoupper($Fetch['nome']); ?></span> </td> 
        </tr>
        <tr>
            <td class="tdVisual"> <strong><span class="tituloTabela">SEXO:</span> </strong></td><td><span class="tituloTabela"><?php echo strtoupper($Fetch['sexo']); ?></span></td>
        </tr>
        <tr>
            <td class="tdVisual"> <strong><span class="tituloTabela">CIDADE:</span> </strong></td><td><span class="tituloTabela"><?php echo strtoupper($Fetch['cidade']); ?></span></td> 
        </tr>



    </table>



</div>

<?php include 'includes/footer.php' ?>