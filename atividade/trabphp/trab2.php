<?php

    $sorteio = rand(0,50);

    switch($sorteio){
        case ($sorteio == 0 );
        echo "Valor nulo";
        break;

    case ($sorteio %2 == 0);
    echo "$sorteio - Valor par";
    break;

    default:
    echo "$sorteio - Valor impar";
    break;
    }

?>