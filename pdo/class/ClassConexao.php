<?php

//conexao com o banco de dados
abstract class ClassConexao {
  protected function conectaDB(){
    try{
        $con = new PDO("mysql:host=localhost;dbname=crud","root","root");
        return $con;
        
    } catch (PDOException $erro) {
echo $erro->getMessage();

    }
             
    }

    
    }
