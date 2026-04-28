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
    $anoFundacao = 2009;
    $anoAtual = 2026;
    $tempoEmpresa = $anoAtual - $anoFundacao; //faz o calculo do tempo que a empresa está aberta
    $funcionarios = 400;
    $funcionariosDemitidos = 35;
    $funcionariosAtivos = $funcionarios - $funcionariosDemitidos; //faz os cálculos dos funcionários ativos
    $mediaEmpresa = $funcionariosAtivos >= 100;

    echo "<h1> Seja bem-vindo a $empresa </h1>"; // puxa a variavel com o nome da empresa e coloca o texto
    echo "<hr>"; 
    echo "A " . $empresa . " está no mercado a " . $tempoEmpresa . " anos."; //coloca o tempo que a empresa está no mercado
    echo "<hr>";
    echo "A "  . $empresa . " tem " . $funcionariosAtivos . " funcionários ativos.";
    echo "<hr>";
    echo "<p> $funcionariosDemitidos funcionários foram demitidos esse ano.";
    echo "<hr>";
    echo "A empresa é de: " . ($mediaEmpresa ? "Grande porte." : "Médio porte."); //define se a empresa é de grande ou médio porte
    echo "<hr>";

    ?>
</body>
</html>