<html>
    <head>
        <meta charset="utf-8">
    </head>


<?php

        $vetor = [
            "Naruto",
            "One piece",
            "Dragon Ball"
        ];

        echo var_dump($vetor) . "</br></br>";

        array_unshift($vetor, "One push man"); //adiciona no início do vetor

        echo var_dump($vetor);

?>
            </pre>
        </div>
    </body>
</html>