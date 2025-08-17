<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio: Sistema de Pontuação de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Sistema de Pontuação de Alunos</h1>

    <form action="" method="post">
        <h2>Aluno 1</h2>
        Nome: <input type="text" name="aluno1_nome" required><br>
        Nota: <input type="number" name="aluno1_nota" min="0" max="10" required><br><br>

        <h2>Aluno 2</h2>
        Nome: <input type="text" name="aluno2_nome" required><br>
        Nota: <input type="number" name="aluno2_nota" min="0" max="10" required><br><br>

        <h2>Aluno 3</h2>
        Nome: <input type="text" name="aluno3_nome" required><br>
        Nota: <input type="number" name="aluno3_nota" min="0" max="10" required><br><br>

        <input type="submit" value="Calcular Resultados">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar e receber os dados do formulário
        $alunos = [];
        $erros = [];

        for ($i = 1; $i <= 3; $i++) {
            $nome_key = 'aluno' . $i . '_nome';
            $nota_key = 'aluno' . $i . '_nota';

            $nome = trim($_POST[$nome_key] ?? '');
            $nota = filter_input(INPUT_POST, $nota_key, FILTER_VALIDATE_FLOAT);

            /*condição se para mandar para os erros caso eles existão nota tem 
            que ser digitada e não pode ser menor que 0 ou maior que 10 e o 
            nome no usuário não pode estar vazia*/
            if (empty($nome)) {
                $erros[] = "O nome do Aluno $i não pode estar vazio.";
            }

            if ($nota === false || $nota < 0 || $nota > 10) {
                $erros[] = "A nota do Aluno $i deve ser um número entre 0 e 10.";
            }

            $alunos[] = ['nome' => $nome, 'nota' => $nota];
        }
        // se a array erro não estiver vazia vai percorrer e mostar os erros
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo "<p style=\"color: red;\">$erro</p>";
            }
            exit; // Interrompe a execução se houver erros
        }

        //variavel para a soma das notas para a maior nota e o nome do 
        // aluno que tem a maior nota
        $soma_notas = 0;
        $maior_nota = 0; 
        $aluno_maior_nota = "";

        // Percorrer os alunos para calcular a média e verificar maior nota
        foreach ($alunos as $aluno) {
            $soma_notas += $aluno['nota'];

            // Condicional para aprovação
            if ($aluno['nota'] >= 7) {
                echo "<p class=\"aprovado\">{$aluno['nome']} foi <strong>aprovado</strong> com nota {$aluno['nota']}.</p>";
            } else {
                echo "<p class=\"reprovado\">{$aluno['nome']} foi <strong>reprovado</strong> com nota {$aluno['nota']}.</p>";
            }

            // Verificar maior nota
            if ($aluno['nota'] > $maior_nota) {
                $maior_nota = $aluno['nota'];
                $aluno_maior_nota = $aluno['nome'];
            }
        }

        // Calcular a média
        $media = $soma_notas / count($alunos);
        echo "<p class=\"media\">A média das notas é: <strong>$media</strong>.</p>";

        // Mostrar o aluno com maior nota
        echo "<p class=\"maior-nota\">O aluno com a maior nota é: <strong>$aluno_maior_nota</strong> com nota $maior_nota.</p>";
    }
    ?>
    </div>
</body>
</html>
