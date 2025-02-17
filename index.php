<doctype html>
<html>
<head>
    <title>Primeiro Projeto</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <h1>Introdução a programação</h1>
    <h2>metodo funcional</h2>

<?php
    function somaFuncional($a, $b, $c){
        return ($a + $b + $c) ** 2;
    }
    echo somaFuncional(1, 2, 3);

    function somaImperativa($a, $b, $c){
        $soma = $a + $b + $c;
        return $soma * $soma;
    }
    //echo somaImperativa(1, 2, 3);
?>
    <h2>metodo imperativo</h2>
    <?php echo somaImperativa(1, 2, 3); ?>

</body>

