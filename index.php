<doctype html>
<html>
<head>
    <title>Primeiro Projeto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Olá Mundo</h1>      
    <p>Este é o meu primeiro projeto em PHP</p>
    <marquee><p>Estou aprendendo a programar em PHP</p></marquee>
    <?php
    $variavelGlobal = "Eu sou global";
    
    function exemplo() {
        $variavelLocal = "Eu sou local";
        
        
    }
    echo $variavelGlobal; // Acessa a variável global      

    ?>

</body>

