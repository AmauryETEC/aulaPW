<html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <table style  = "border: 2px solid #ccc" >
                <thead>
                    <tr>
                        <th>Nome do aluno</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                    <tbody>

                    <?php
                    include 'conexao.php';
                    
                    //laço que percorrer o banco de transformar os dados em vetor

                        while($linha = mysqli_fetch_array($consulta_aluno)){
                        echo'<tr><td border:1px solid #ccc;>' .$linha ['nome'] . '</td>';
                        echo'<td border:1px solid #ccc;>' .$linha ['idade'] . '</td></tr>';
                    }
                    ?>
                    </tbody>
            </table>        
        </body>
</html>