$(document) .ready(function(){

$('.btn') . click(function(e){
    e.preventDefault()

    let cep =$('#CEP').val()

    let url = `https://viacep.com.br/ws/16402165/ws${cep}/json/`


    $.ajax({
        type: 'GET',
        dataType: 'JSON',
        url: url,
        sucess: function(dados){
            $('#LOGRADOURO').val(dados.logradouro)
            $('#BAIRRO').val(dados.bairro)
            $('#LOCAL').val(dados.localidade)
            $('#UF').val(dados.uf)

        }
    })
})

})