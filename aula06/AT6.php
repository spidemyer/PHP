<?php
//Lista simples de funcionários (Nome e Idade)
$funcionarios = [
    ["nome" => "Ana", "idade" => 25],
    ["nome" => "João", "idade" => 17], // Menor de idade para testar o IF
    ["nome" => "Caio", "idade" => 30],
    ["nome" => "Beatriz", "idade" => 16] // Menor de idade para testar o IF
];

// Contagem para o controle do laço
$total = count($funcionarios);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista Simples</title>
</head>
<body>

    <h1>Funcionários Cadastrados</h1>

    <ul>
        <?php
        // Repetição usando FOR
        for ($i = 0; $i < $total; $i++) {
            
            $f = $funcionarios[$i];
            
            // Se for menor de 18, adiciona um aviso
            $aviso = "";
            if ($f['idade'] < 18) {
                $aviso = " - (Atenção: Menor de idade)";
            }
        ?>

            <li>
                <strong>Nome:</strong> <?php echo $f['nome']; ?> | 
                <strong>Idade:</strong> <?php echo $f['idade']; ?>
                <?php echo $aviso; ?>
            </li>

        <?php 
        }
        ?>
    </ul>

</body>
</html>