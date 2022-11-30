<?php
    include 'conexao.php';

    $nome_curso = $_POST['nome'];
    $area = $_POST['area'];
    $descricao = $_POST['descricao'];
    $carga = $_POST['carga'];

    $consulta = "INSERT INTO curso(nome_curso, area, descricao, carga_h)
                       VALUES ('$nome_curso', '$area', '$descricao', $carga)";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>
