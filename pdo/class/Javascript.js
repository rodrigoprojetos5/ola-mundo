/* global $this */

$("#FormCadastro").on('submit', function(event){
	event.preventDefault();
	var Dados=$(this).serialize();

$.ajax({
	url:'controllers/controllercadastro.php',
	type:'post',
	dataType:'html',
	data:Dados,
	success:function(Dados){
		$('.Resultado').show().html(Dados);
	}
});
});