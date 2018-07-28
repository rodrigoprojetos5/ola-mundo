

<?php   include 'includes/header.php';
        include 'class/ClassCrud.php';
?>



<div class="Content">


    <table class="TabelaCrud">
        <tr>
        <td>NOME</td>
        <td>SEXO</td>
        <td>CIDADE</td>
        <td>AÇÕES</td>
        </tr>
 <!-- estrutura de loop -->        
        <?php $crud = new ClassCrud();      
        
        $BFetch=$crud->selectDB("*" , "cadastro", "", array() );
        
        while($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
            
 <tr>
     <td class="tnome"><?php echo strtoupper($Fetch['nome']);  ?></td>
     <td><?php echo strtoupper($Fetch['sexo']);  ?></td>
     <td><?php echo$Fetch['cidade'];  ?></td>
     <td>
         <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="images/visualizar.jpg" alt="visualizar"></a>
         <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="images/editar.jpg" alt="editar"></a>
         <a class="Deletar" href="<?php echo "controllers/controllerdeletar.php?id={$Fetch['id']}"; ?>"><img src="images/deletar.png" alt="deletar"></a>
     </td>
 </tr>
 
  <?php  }
        
        ?>
 <script src="includes/zepto.min.js"></script>
 <script src="Javascript.js"></script>
    </table>
   

</div>

<?php include 'includes/footer.php' ?>