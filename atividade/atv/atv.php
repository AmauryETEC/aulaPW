<?php

        //Funções (rotinas) em php
        //uma função é uma pequena rotina nomeada que permite que certo algorito seja reutilizado pela aplicação, garantindo
        //que seu código não será reutulizado pela aplicação, garantindo que seu código não será duplicado, e que a sua manutenção 
        //será feita em apenas um lugar.
        //Uma função efetua uma tarefa epecífica, possivelmente processando um conjunto de valores fornecidos a ela (Parâmetros)
        //e/ou retornando algum valor


        //função
        $operador = "+";
        function somar($v1, $v2){
            $soma = $v1 + $v2;

            return "</h2>$soma<h2>";
        }


        echo "A soma é: " . somar(10, 5) ;     // 1ª Chamada da função 


        if($operador == "+"){
            echo somar(50, 10); // 2ª chamada da função            
        }

        else{
            echo "Operador inválido";
        }

        switch ($operador){
            case '+':
                echo somar(99, 1); // 3ª CHAMADA DA FUNÇÃO
                break;
            default:
                echo "Operador inválido!";
                break;
                
        }

?>