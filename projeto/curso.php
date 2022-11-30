<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(!isset($_GET['editar'])){ ?>

        <form method="POST" action="processa_curso.php">
            <h2>INSERIR CURSO</h2>
            <label><h3>Nome do curso:</h3></label>
            <input type="text" name="nome" placeholder="Digite o nome do curso"/>
            <br><br>
            <label><h3>Área:</h3></label>
            <input type="text" name="area" placeholder="Digite a área do curso"/>
            <br><br>
            <label><h3>Descrição:</h3></label>
            <input type="text" name="descricao" placeholder="Digite a descrição do curso"/>
            <br><br>
            <label><h3>Carga horária:</h3></label>
            <input type="number" name="carga" placeholder="Digite a carga horária"/>
            <br><br>

            <input type="submit" value="CADASTRAR">
        </form>

        <?php }else{ ?>

        <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM curso";
            $consulta_curso = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_curso)){
                if($linha['cod_curso'] == $_GET['editar']){
        ?>

        <form method="POST" action="edita_curso.php">
            <h2>EDITAR CURSO</h2>
            <input type="hidden" name="codigo" value="<?php echo $linha['cod_curso']; ?>">
            <label><h3>Nome do curso:</h3></label>
            <input type="text" name="nome" value="<?php echo $linha['nome_curso'];?>"/>
            <br><br>
            <label><h3>Área:</h3></label>
            <input type="text" name="area" value="<?php echo $linha['area']; ?>"/>
            <br><br>
            <label><h3>Descrição:</h3></label>
            <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"/>
            <br><br>
            <label><h3>Carga horária:</h3></label>
            <input type="number" name="carga" value="<?php echo $linha['carga_h'] ?>"/>
            <br><br>

            <input type="submit" value="EDITAR">
        </form>
        <?php } ?> <!--FECHA O IF -->
        <?php } ?> <!--FECHA O WHILE -->
        <?php } ?> <!--FECHA O ELSE -->
    </body>
</html>