<?php

    include 'conexao.php';

    $cod_curso = $_GET['cod_curso'];

    $consulta = "DELETE FROM curso WHERE cod_curso = $cod_curso";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>