<?php
if(isset($_POST['s'])){
	$s= filter_input(INPUT_POST,'s', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['s'])){
		$s= filter_input(INPUT_GET,'s', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$s= 0;
		}

if(isset($_POST['n'])){
	$n= filter_input(INPUT_POST,'n', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['n'])){
		$n= filter_input(INPUT_GET,'n', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$n= 0;
		}

if(isset($_POST['busca'])){
	$busca= filter_input(INPUT_POST,'busca', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['busca'])){
		$busca= filter_input(INPUT_GET,'busca', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$busca= 0;
		}
                
if(isset($_POST['bsexo'])){
	$bsexo= filter_input(INPUT_POST,'bsexo', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['bsexo'])){
		$bsexo= filter_input(INPUT_GET,'bsexo', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$bsexo= 0;
		}                
                

if(isset($_POST['acao'])){
	$acao= filter_input(INPUT_POST,'acao', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['acao'])){
		$acao= filter_input(INPUT_GET,'acao', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$acao= "";
		}

if(isset($_POST['id'])){
	$id= filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['id'])){
		$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$id= 0;
		}

if(isset($_POST['nome'])){
	$nome= filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['nome'])){
		$nome= filter_input(INPUT_GET,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$nome = "";
		}

if(isset($_POST['sexo'])){
	$sexo= filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['sexo'])){
		$sexo = filter_input(INPUT_GET,'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$sexo = "";
		}

if(isset($_POST['cidade'])){
	$cidade= filter_input(INPUT_POST,'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($_GET['cidade'])){
	$cidade = filter_input(INPUT_GET,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$cidade = "";
		}

?>