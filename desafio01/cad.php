<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resuldado do processamento</h1>
    </header>
<main>
    <?php 
    
        $numero = $_GET["numero"];
        $anterior = $numero - 1;
        $sucessor = $numero + 1;
        echo "<p>Você digitou o número $numero \n";
        echo "<p>O numero antecessor de $numero é: $anterior    </p>";
        echo "<p>O número sucessor é: $sucessor</p>";
        echo "<p>Obrigado por usar o meu site :)</p>";
    ?>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
</main>
</body>
</html>