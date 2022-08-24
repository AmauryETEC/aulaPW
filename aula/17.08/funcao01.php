<?php

    function verificar($valor){
    
    if($valor == 0){
    echo "O $valor é igual a 0";
    }

    elseif ($valor > 0 ){
    echo " O $valor é positivo";

    }

    else {
        echo " o $valor é negativo!";
    }

}

    echo verificar(0);
    echo "</br>";

    echo verificar(30);
    echo "</br>";
    
    ?>