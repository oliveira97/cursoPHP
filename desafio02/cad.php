<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $numero = mt_rand(1, 100);
            echo "<p>O número gerado aleatóriamente foi: $numero</p>";
        ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Outra vez!</button>    
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>    
    </main>
</body>
</html>