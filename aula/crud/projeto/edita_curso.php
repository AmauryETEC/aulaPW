<?php

    include 'conexao.php';

    $cod_curso = $_POST['codigo'];
    $nome_curso = $_POST['nome'];
    $area = $_POST['area'];
    $descricao = $_POST['descricao'];
    $carga = $_POST['carga'];

    $consulta = "UPDATE curso SET nome_curso = '$nome_curso',
                                 area = '$area',
                                descricao = '$descricao',
                          carga_h = $carga
                              WHERE cod_curso = $cod_curso";
    
    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>