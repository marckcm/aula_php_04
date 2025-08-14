<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Laço Do...While</title>
</head>

<body>
    <h2>Exibindo valores até que sejam maiores que 10:</h2>

    <?php
    $n = 0;

    do {
        echo "Valor de x: " . $n . "<br>";
        $n++;
    } while ($n <= 10);
    ?>

</body>

</html>