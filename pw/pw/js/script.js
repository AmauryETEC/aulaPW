$(document).ready(function(){
    //Selecionando o elemnento que iremnos monitorar o click

    $('.btn').click(function(e){

        e.preventDefaut()

        alert('Você clicou no botão!')

    })
})