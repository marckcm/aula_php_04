<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Array Associativo</title>
</head>
<body>
    <h2>Lista de Pessoas:</h2>
<?php
$pessoas = [
    "Ana" => 25,
    "Carlos" => 30,
    "Pedro" => 40
];
foreach ($pessoas as $nome => $idade) {
    echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
}
?>
</body>
</html>