<?php
    $nome = $_GET['nome'];
    $salario = $_GET['sal'];
    $op = $_GET['radio'];


        echo "O nome é: $nome" . <br>

        switch(){
            case 1: 
            $porcentagem = ($salario * 10) / 100;
            $novo_sal = $porcentagem + $salario;
            break;

            case 2: 
            $porcentagem = ($salario * 25) / 100;
                        $novo_sal = $porcentagem + $salario;
                        break;

                        case 3: 
                            $porcentagem = ($salario * 33) / 100;
                            $novo_sal = $porcentagem + $salario;
                            break;

                            case 4: 
                                $porcentagem = ($salario * 41) / 100;
                                $novo_sal = $porcentagem + $salario;
                                break;

                                case 5: 
                                    $porcentagem = ($salario * 50) / 100;
                                    $novo_sal = $porcentagem + $salario;
                                    break;
            default:
            $porcentagem = ($salario * 0) / 100;
            $novo_sal = $porcentagem + $salario;
            break;
            }
            echo "O salário é: $salario" . "</br>"
            echo "O aumento é: $porcentagem" . "</br>";
            echo "O novo salário é: $novo_sal";