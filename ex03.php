<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Dia da Semana</title>
</head>

<body>
    <form action="" method="POST">
        <label for="dia">Digite um número (1 a 7):</label>
        <input type="number" id="dia" name="dia" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST['dia'];
        switch ($dia) {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda-feira";
                break;
            case 3:
                echo "Terça-feira";
                break;
            case 4:
                echo "Quarta-feira";
                break;
            case 5:
                echo "Quinta-feira";
                break;
            case 6:
                echo "Sexta-feira";
                break;
            case 7:
                echo "Sábado";
                break;
            //end-code
            default:
                echo "Número inválido.";
                break;
        }
    }
    ?>
</body>

</html>