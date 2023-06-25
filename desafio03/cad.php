<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <?php
        $valor = $_GET["valor"];
        $cotacao = 4.78;
        $valorConvertido = $valor / $cotacao;
        echo "<p>O valor digitado em dolar é US$" .number_format($valorConvertido, 2). "</p>";
    ?>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>    
</main>
</body>
</html>