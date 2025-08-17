<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números de 100 a 200</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Números de 100 a 200 (incremento de 2 em 2)</h1>
        <?php
        for ($i = 100; $i <= 200; $i += 2) {
            echo "<span>$i </span>";
        }
        ?>
    </div>
</body>
</html>
