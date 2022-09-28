<?php

    $valor = $_GET['valor'];
    $op = $_GET['op'];

    switch($op){

    case 1: 
        echo $valor *2;
        break;

    case 2: 
        echo $valor + 10;
        break;

    case 3:
        echo pow $valor * $valor;
         break;

    default:
    echo $valor;
    break;
    }
?>