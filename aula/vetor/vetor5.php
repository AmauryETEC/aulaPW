<html>

    <head>
     <meta charset="utf-8">   
    </head>

    <body>
        <div>
            <pre>
    <?php

    $vetor = array(
        1,
        2,
        3
    );
    echo var_dump($vetor) . "</br></br>";


    //Adiciona no final do vetor
    $vetor[] =  6;
    $vetor[] = "Teste";

    echo var_dump($vetor);

?>
        </pre>
    </div>
</body>



</html>