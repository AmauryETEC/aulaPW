<?php

    $nome = "Arroz";
    $valor = 100;
    $codigo = 1;

    if($codigo == 1){
        $porcentagem = ($valor * 9) / 100;
        $desconto = $valor - $porcentagem;
    }

    elseif($codigo == 2){
        $porcentagem = ($valor * 22) / 100;
        $desconto = $valor - $porcentagem;
    }

    elseif($codigo == 3){
        $porcentagem = ($valor * 5) / 100;
        $desconto = $valor - $porcentagem;
    }

    else{
            $porcentagem = ($valor * 0) / 100;
            $desconto = $valor - $porcentagem;
    }


    echo " O nome do produto é: $nome </br>";
    echo " O valor do produto é de: $valor </br>";
    echo " O desonto do é: $porcentagem</br>";

?>