<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Verificar Idade</title>
</head>

<body>
    <form action="" method="POST">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];
        if ($idade < 15) {
            echo "Você é uma criança.";
        } elseif ($idade < 18) {
            echo "Você é um adolescente.";
        } elseif ($idade < 63) {
            echo "Você é um adulto.";
        } else {
            echo "Você é um idoso.";
        }
    }
    ?>
</body>

</html>