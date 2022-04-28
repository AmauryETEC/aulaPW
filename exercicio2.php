<?php

    $valor = $_GET['valor'];
    $op = $_GET['op'];

    switch($op){

        case 1: 
            $valor = 1;
            echo Não tem aula;
            break;

            case 2: 
                $valor = 2;
                echo Dia de aula;
                break;

                case 3: 
                    $valor = 3;
                    echo Dia de aula;
                    break;

                    case 4: 
                        $valor = 4;
                        echo Dia de aula;
                        break;

                        case 5: 
                $valor = 5;
                echo Dia de aula;
                break;

                case 6: 
                    $valor = 6;
                    echo Dia de aula;
                    break;

                    case 7: 
                        $valor = 7 ;
                        echo Não tem aula;
                        break;

        default:
        echo $valor;
        break;
        }

?>