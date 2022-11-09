<?php
// Para fazer a conexão, são necessárias 4 variáveis
$servidor= "localhost";
$usuario= "root";
$senha= "";
$banco="escola";

$conexao= mysqli_connect($servidor, $usuario,$senha,$banco) or die;

$consulta = "SELECT * FROM alunos";
$consulta_aluno = mysqli_query($conexao, $consulta);

?>