<html>

    <head>
        <meta charset = "utf-8">
    </head>

    <body>
        <form method = "POST" action = "processa_matricula.php">
        <select name = "escolha_aluno">
        <option> Selecione um aluno </option>
        
        <?php
        include 'conexao.php';
        $consulta = "SELECT * FROM aluno";
        $consulta_aluno = mysqli_query($conexao, $consulta);
        while($linha = mysqli_fetch_array($consulta_aluno)){
            echo '<option value="' . $linha['ID'] . '">' .
                 $linha['nome'] . '</option>' ;         } 
    ?>
    </select>

    </br></br>

    <select name = "escolha_aluno">
        <option> Selecione um aluno </option>
        
        <?php
        include 'conexao.php';
        $consulta = "SELECT * FROM curso";
        $consulta_aluno = mysqli_query($conexao, $consulta);
        while($linha = mysqli_fetch_array($consulta_aluno)){
            echo '<option value="' . $linha['Codigo'] . '">' .
                 $linha['Nome'] . '</option>' ;         } 
    ?>
    </select>




    </body>
