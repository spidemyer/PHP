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
    echo "<h1> Seja bem-vindo a $empresa </h1>"; // puxa a variavel com o nome da empresa e coloca o texto
    echo "<hr>";
    $anoFundacao = 2009;
    echo "<p> Nossa empresa foi fundada em $anoFundacao.</p>"; //mostra o ano de fundação
    $quantidadeFuncionarios = 40;
    echo "<p> Atualmente temos $quantidadeFuncionarios funcionários ativos na empresa.";    
    $faturamento = 2000000.00;
    echo "<p> Nosso Faturamento é de $faturamento";
    $empresaAtiva = false;
    echo "<p> A empresa está: " . ($empresaAtiva? "Ativa":"Desativada."); //mostra se a empresa está ativa ou desativada de acordo com o true / false
    ?>
</body>
</html>