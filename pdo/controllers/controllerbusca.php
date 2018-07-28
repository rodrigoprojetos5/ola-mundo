<?php
         

include "../includes/variaveis.php";
include"../class/ClassCrud.php";



if ($bsexo == "") {
    $bsexo = "bsexo=";
}
if ($busca == "") {
    $busca = "busca=";
}


if (isset($_GET['busca'])) {
    $crud = new ClassCrud();

    $BFetch = $crud->selectDBNome("*", "cadastro", "where nome LIKE  '%$busca%' ", array($busca));
    
    
    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
        
        ?>

        <table class="TabelaCrud">         
            <tr>
                <td class="tnome"><?php echo strtoupper($Fetch['nome']); ?></td>
                <td><?php echo strtoupper($Fetch['sexo']); ?></td>
                <td><?php echo$Fetch['cidade']; ?></td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="images/visualizar.jpg" alt="visualizar"></a>
                    <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="images/editar.jpg" alt="editar"></a>
                    <a class="Deletar" href="<?php echo "controllers/controllerdeletar.php?id={$Fetch['id']}"; ?>"><img src="images/deletar.png" alt="deletar"></a>
                </td>
            </tr>

            <style> .fnome{display:<?php echo $acaonome; ?>} </style>
            <style> .fsexo{display:<?php echo $acaosexo; ?>} </style>

            <?php              
        }
}else{
echo"Nenhum registro encontrado !";
}
    ?>

    <?php
    if (isset($_GET['bsexo'])) {
        $crud = new ClassCrud();

        $BFetch = $crud->selectDBNome("*", "cadastro", "where sexo LIKE  '%$bsexo%' ", array($bsexo));

        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <table class="TabelaCrud">         
                <tr>
                    <td class="tnome"><?php echo strtoupper($Fetch['nome']); ?></td>
                    <td><?php echo strtoupper($Fetch['sexo']); ?></td>
                    <td><?php echo$Fetch['cidade']; ?></td>
                    <td>
                        <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="images/visualizar.jpg" alt="visualizar"></a>
                        <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="images/editar.jpg" alt="editar"></a>
                        <a class="Deletar" href="<?php echo "controllers/controllerdeletar.php?id={$Fetch['id']}"; ?>"><img src="images/deletar.png" alt="deletar"></a>
                    </td>
                </tr> 
                <style> .fnome{display:<?php echo $acaonome; ?>} </style>
                <style> .fsexo{display:<?php echo $acaosexo; ?>} </style>

                <?php
            }
        }else{echo"Nenhum registro encontrado !";}
        ?>

    </table>