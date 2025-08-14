<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Comando Continue</title>
</head>

<body>
    <h2>Números pares de 1 a 10:</h2>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            continue;
        }
        echo $i . "<br>";
    }
    ?>
</body>

</html>