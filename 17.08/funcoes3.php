faça uma função que receba dois parâmetros, de salário e porcentagem
de aumento de salário, Faça 3 chamadas de função,e a partir do salário
e porcentagem de aumento, valor do aumento e novo.

<?php

    function salario($n1, $porc){
        $porcentagem = ($sal * $porc) /100;
        $aumento = $porcentagem + $sal;
        echo "O salário é $sal </br>"
        echo "a porcentagem de aumento é $porc </br>";
        echo "O aumento de salário será $aumento </br>";
        echo "O novo salário é $salario";
    }


    echo salario(1000, 10);
    

?>