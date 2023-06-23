<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor = $_GET["valor"];
    $valorConvertido = $valor / 5.22;

    echo "<p>O valor digitado em dolar é <strong>US$</strong> $valorConvertido </p>";
    
    ?>
</body>
</html>