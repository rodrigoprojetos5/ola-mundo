  <?php 
  include ("../class/ClassCrud.php"); 
 
 
$crud = new ClassCrud();
$IdUser= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB("cadastro","id=?", array($IdUser));

echo "Dado deletado com sucesso";
?>