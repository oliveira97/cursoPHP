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
    <h1>Conversor de moedas</h1>
    <?php
        $valor = $_GET["valor"];
        $cotacao = 4.78;
        $dolar= $valor / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>O valor digitado em dolar é " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
    ?>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>    
</main>
</body>
</html>