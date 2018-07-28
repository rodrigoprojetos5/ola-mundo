
$('#FormCadastro').on('submit', function (event) {
    event.preventDefault();
    var Dados = $(this).serialize();

    $.ajax({
        url: 'controllers/controllercadastro.php',
        type: 'post',
        dataType: 'html',
        data: Dados,
        success: function (Dados) {
            $('.Resultado').show().html(Dados);
        }
    });
}); 

/*confirmar antes de deletar os dados*/

$('.Deletar').on('click', function(event){
event.preventDefault();
var Link=$(this).attr('href');
if(confirm("Deseja mesmo deletar esse dado?")){
    window.location.href=Link;
}else{
    return false;
}
});


$('#formNome').on('submit', function (event) {
    event.preventDefault();
    var Dados = $(this).serialize();

    $.ajax({
        url: 'controllers/controllerbusca.php',
        type: 'get',
        dataType: 'html',
        data: Dados,
        success: function (Dados) {
            $('#ResultadoNome').show().html(Dados);
        }
    });
}); 

$('#formSexo').on('submit', function (event) {
    event.preventDefault();
    var Dados = $(this).serialize();

    $.ajax({
        url: 'controllers/controllerbusca.php',
        type: 'get',
        dataType: 'html',
        data: Dados,
        success: function (Dados) {
            $('#ResultadoSexo').show().html(Dados);
        }
    });
}); 



/*confirmar antes de deletar os dados*/

$('.Deletar').on('click', function(event){
event.preventDefault();
var Link=$(this).attr('href');
if(confirm("Deseja mesmo deletar esse dado?")){
    window.location.href=Link;
}else{
    return false;
}
});

