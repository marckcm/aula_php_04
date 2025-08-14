<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Laço For</title>
</head>

<body>
    <h2>Números pares de 1 a 20:</h2>
    <?php
    for ($i = 1;$i <= 20; $i++ ) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    ?>
</body>

</html>