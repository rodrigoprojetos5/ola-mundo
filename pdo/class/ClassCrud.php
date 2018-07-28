<?php

include ("{$_SERVER['DOCUMENT_ROOT']}/mysqli/pdo/class/ClassConexao.php");

class ClassCrud extends ClassConexao {
    #atributos

    private $crud;
    private $contador;

    #preparacao das declarativas

    private function preparedStatements($query, $parametros) {
        $this->countParametros($parametros);
        $this->crud = $this->conectaDB()->prepare($query);

        if ($this->contador > 0) {
            for ($i = 1; $i <= $this->contador; $i++) {
                $this->crud->bindValue($i, $parametros[$i - 1]);
            }
        }
        $this->crud->execute();
    }

#contador de parametros

    private function countParametros($parametros) {
        $this->contador = count($parametros);
    }

#insercao no banco de dados

    public function insertDB($tabela, $condicao, $parametros) {
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $parametros);
        return $this->crud;
    }

#selecao banco dados

    public function selectDB($campos, $tabela, $condicao, $parametros) {
        $this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $parametros);
        return $this->crud;
    }

   public function selectDBNome($campos, $tabela, $condicao, $parametros){
       $this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $parametros);
       return $this->crud;
   } 
   
#deletar do banco de dados

    public function deleteDB($tabela, $condicao, $parametros) {
        $this->preparedStatements("delete from {$tabela} where {$condicao}" , $parametros);
        return $this->crud;
        
        }
        
    #atualizacao do banco de dados
      public function updateDB($tabela, $set, $condicao,$parametros){
          $this->preparedStatements("update {$tabela} set {$set} where {$condicao}", $parametros); 
          return $this->crud;
          
          }
          
          
}
