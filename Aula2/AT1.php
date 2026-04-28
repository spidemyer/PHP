<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Yourself</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background-color: lightcyan;
        }
    </style>
</head>
<body>
    <?php 
    $empresa = "Love Yourself";
    echo "<h1> Seja bem-vindo a $empresa </h1>";
    echo "<hr>";
    $anoFundacao = 2009;
    echo "<p> Nossa empresa foi fundada em $anoFundacao.</p>";
    $quantidadeFuncionarios = 40;
    echo "<p> Atualmente temos $quantidadeFuncionarios ativos na empresa.";    
    $faturamento = 2000000.00;
    echo "<p> Nosso Faturamento é de $faturamento";
    $empresaAtiva = false;
    echo "<p> A empresa está: " . ($empresaAtiva? "Ativa":"Desativada.");
    ?>
</body>
</html>