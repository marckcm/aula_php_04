<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Verificar Ímpar ou Par</title>
</head>

<body>
    <h2>Verificar se os números são ímpares ou pares:</h2>

    <?php
    $numeros = [10, 15, 20, 25, 30, 35];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            echo $numero . " é par.<br>";
        } else {
            echo $numero . " é ímpar.<br>";
        }
    }
    ?>
</body>

</html>