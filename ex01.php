<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Verificar Número</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        // Verifique se o número é positivo, negativo ou zero.
        if ($numero > 0) {
            echo "O número é positivo!";

        } elseif ($numero < 0) {

            echo "O número é negativo!";

        } else {
            echo "O número é zero!";
        }
    }
    ?>
</body>

</html>