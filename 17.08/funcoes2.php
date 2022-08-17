<?php

    function verificar($v){
        if($v %2 == 0){
        echo "$v é par </br>";
    }

    else{
        echo "$v é impar </br>";
    }

    $resultado = 1;

    for($contador = $v; $contador > 1; $contador--) {
        $resultado = $resultado * $v;
        $v--;
    }
    echo "O fatorial é $resultado";
}

    echo "</br>" . verificar(5);
    echo "</br>" . verificar(6);


?>