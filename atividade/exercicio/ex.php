<?php

    $valor = $_GET['número'];
    $valor2 = $_GET['número2’];
    $op = $_GET[‘op']

    Swith($Op) {

    case " soma " :
    $soma = $numero + $numero_2;
    echo " a soma dos valores é $valor ";
    break;

    case "mult" :
    $soma = $numero * $numero_2;
    echo " a soma dos valores é $mult ";
    break;

    case "div":
    $soma = $numero / $numero_2;
    Echo " a soma dos valores é $div";
    break;

    case " sub " :
    $soma = $numero - $numero_2;
    echo " a soma dos valores é $sub " ;
    break;
    default :
    echo “inválido ”

}