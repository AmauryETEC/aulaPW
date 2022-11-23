<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc">
            <thead>
                <th>Nome do Curso</th>
                <th>Área</th>
                <th>Descrição</th>
                <th>Carga horária</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';
                    $consulta = "SELECT * FROM curso";
                    $consulta_curso = mysqli_query($conexao, $consulta);

                    while($linha = mysqli_fetch_array($consulta_curso)){
                        echo '<tr><td>' . $linha['nome_curso'] . '</td>';
                        echo '<td>' . $linha['area'] . '</td>';
                        echo '<td>' . $linha['descricao'] . '</td>';
                        echo '<td>' . $linha['carga_h'] . '</td>';                        
                ?>

                <td><a href="deleta_curso.php?cod_curso=<?php echo $linha['cod_curso']; ?>">
                    <input type="submit" value="DELETAR">
                </a></td>
            
                <td><a href="curso.php?editar=<?php echo $linha['cod_curso']; ?>">
                    <input type="submit" value="EDITAR">
                </a></td>          
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="curso.php"><input type="submit" value="VOLTAR"/></a>
    </body>
</html>