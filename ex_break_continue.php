<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Break e Continue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .number-list {
            list-style: none;
            padding: 0;
        }

        .number-item {
            margin-bottom: 5px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .highlight {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <h2>Números</h2>
    <ul class="number-list">
        <?php
        $numbers = [2, 4, 6, 8, 10, 7, 12, 3, 14, 16];

        foreach ($numbers as $number) {
            if ($number > 13) {
                echo "<li class='number-item highlight'>$number (Break)</li>";
                break;
            }

            if ($number % 2 != 0) {
                echo "<li class='number-item'>$number (Ímpar, Continue)</li>";
                continue;
            }

            echo "<li class='number-item'>$number</li>";
        }
        ?>
    </ul>
</body>

</html>