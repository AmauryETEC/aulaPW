$(function(){
    $(window).scroll(function() {
        var windows_scrolltop = $ (this).scrollTop()

        // Busca cada elemento parallax

        $('.parallax') .each(function(){
            var obj = $ (this)

            // função para garantir que iremos comente trabalhar com p elemento visível na tela

            if(windows_scrolltop >= obj.position().top - obj. heigth()
            && windows_scrolltop <= obj.position(). top + obj.heigth()){

                // Geração do atributo para controlar a velocidade da animação

                var divisor = typeof obj.attr('data-divisor') == 'undefined'
                ? 4 : obj.attr('data-divisor')

                //Correção em tela do primeiro elemento

                if(obj.is(': first-child')){
                    var bg_pos
                }
            }
        }
  
}