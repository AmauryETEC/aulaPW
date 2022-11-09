<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
    <table style="border: 2px solid #ccc">
    <thead>
        <tr>
            <th>Nome do aluno </th>
            <th>Idade </th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php

    include_once 'conexao.php';
    //Laço que percorrer o banco de transformar os dados em vetor

    $consulta = 'SELECT * FROM alunos';
    $consulta_aluno = mysqli_query($conexao, $consulta);


    while($linha = mysqli_fetch_array($consulta_aluno)){
        echo '<tr><td border: 1px solid #ccc;>' . $linha['Nome'] . '</td>';
        echo '<td>' . $linha['Idade'] . '</td>';
        ?>

        <td><a href ="deleta_aluno.php?ID =
        <?php echo $linha['ID']; ?>">

         <input type="submit" value="Excluir"/>
    </a></td></tr>


        <?php
        }
    ?>
    </tbody>
    </table>
</body>
</html>