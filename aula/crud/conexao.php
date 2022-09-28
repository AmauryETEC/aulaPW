<?php

    /*CRUD - Creat/ Read/ Update/ Delete*/

    /*      Sistema para efetuar as quatro operações no banco de dados :
    Criação, Seleção ou leitura, Edição e Exclusão  */

    /*  Para fazer conexão, é nescessário 4 variáveis  */

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    mysqli_connect($servidor, $usuario, $senha, $banco) or die;        /*  Tentar conecção ou morrer  */






?>