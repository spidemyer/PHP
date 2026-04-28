<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
    <style>
        body{
            text-align: center;
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <?php
        $funcionarios = 120;

        if ($funcionarios < 50) {
            echo "Pequeno porte";
        }
        elseif ($funcionarios < 100) {
            echo "Médio porte";
        }
        else {
            echo "Grande porte";
        }
?>
</body>
</html>