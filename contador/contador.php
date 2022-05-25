<?php

    $contador = 0;
    $contador2 = 10;

    while($contador <= 10){
        echo $contador . "</br>";
        $contador++;
    }

    echo "</br>";

    while($contador2 >= 0):
        echo $contador2 . "</br>";
        $contador2--;
    endwhile;
?>