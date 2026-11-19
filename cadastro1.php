<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $modelo = htmlspecialchars($_POST['model']);
    $senha = $_POST['senha'];

    echo "<h1>Cadastro Recebido!</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Carro favorito:</strong> $modelo</p>";
    echo "<p><strong>Senha:</strong> (" . strlen($senha) . " caracteres)</p>";
    echo "<a href='javascript:history.back()'>Voltar</a>";
} else {
    echo "Nenhum dado enviado.";
}
?>
</body>
</html>