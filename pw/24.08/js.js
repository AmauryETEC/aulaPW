$(document).ready(function(){

    $('p').hide()

    // Monitorar o click no botão "read"

    $('#read').click(function(e){
        e.preventDefault()

        $('p') .toggle(1500, function(){

            //Criar uma variável para receber um status
            let status = $('#read').attr('data-status')

            //Limpando o label do botão
            $('#read').empty()

            //Testar o status

            if(status == 1 ){
                $('#read').append('Esconder resumo')
                $('#read').attr('data-status' , '2')
            }else{
                $('#read'). append('Ver resumo')
                $('#read').attr('data-status' , '1')
            }

        })
    })
})