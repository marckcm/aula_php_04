<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Ímpares de 500 a 1000</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Números Ímpares de 500 a 1000</h1>
        <?php
        for ($i = 500; $i <= 1000; $i++) {
            if ($i % 2 != 0) {
                echo "<span>$i </span>";
            }
        }
        ?>
    </div>
</body>
</html>
