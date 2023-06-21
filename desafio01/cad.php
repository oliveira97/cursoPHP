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
        $anterior = numero - 1;
        $sucessor = numero + 1;
        echo "<p>O numero sucessor é , $sucessor, e o anterior é, $anterior, obrigado por usar o meu site!</p>"
    
    ?>
</main>
</body>
</html>