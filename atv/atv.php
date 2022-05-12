<?php

    $estado = $_GET['estado'];
    $regiao = $_GET['regiao'];

   if ($estado == "SP"){
    echo "Região Sudeste";
   }

   if ($estado == "AC"){
    echo "Região Nordeste";
   }

   if ($estado == "CE"){
    echo "Região Nordeste";
   }

   if ($estado == "AC"){
    echo "Região Nordeste";
   }

   if ($estado == "RJ"){
    echo "Região Sudeste";
   }

   if ($estado == "MA"){
    echo "Região Nordeste";

    if ($estado == "MG"){
        echo "Região Sudeste";
    }

    if ($estado == "MT"){
        echo "Região Centro-Oeste";
       }

       if ($estado == "PA"){
        echo "Região Norte";
       }else{
           $estado = "Região Norte";
   }

?>