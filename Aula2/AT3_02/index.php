<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Empresa</title>
    <style>
        body {
            text-align: center;
            background-color: #FAE6FA;
        }
    </style>
</head>
<body>
    <?php
    $empresa = "Love Yourself";
    $funcionarios = 150;

    echo "<h1>Dados da Love Yourself</h1>";
    echo "<hr>";
    if ($funcionarios < 50) { //confere se a empresa é de pequeno/médio/grande porte com if
        echo "<p>Empresa de pequeno porte.</p>";
    }
    elseif ($funcionarios < 100) {
        echo "<p>Empresa de médio porte</p>";
    }
    else {
        echo "<p>Empresa de grande porte</p>";
    }
    echo "<hr>";

    $tempoEmpresa = 7;

    if($tempoEmpresa < 5) { //confere se a empresa é consolidade de acordo com os anos aberta
        echo "<p>Empresa nova.</p> ";
    } else {
        echo "<p>Empresa consolidada.</p> ";
    }

    echo "<hr>";

    $setor = "TI"; //confere o setor informado

        switch ($setor) {
            case "TI":
                echo "<p>Setor de Tec</p>";
                break;

            case "RH":
                echo "<p>Recursos Humanos</p>";
                break;

            case "Financeiro":
                echo "<p>Setor Financeiro</p>";
                break;
            
            default:
            echo "<p>Setor não identificado</p>";
        }

    echo "<hr>";
    ?>
</body>
</html>