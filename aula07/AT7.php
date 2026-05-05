<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos da Shoppee</title>
</head>
<body>
    

   <table border="2px">
        <th>Nome</th> 
        <th>Preço</th> 

        <?php
            $produtos = [ //lista de produtos
            ["nome" => "Pipoca", "preco"=> 3.99],
            ["nome"=> "Hamburguer", "preco"=> 10.90],
            ["nome"=> "Cimento", "preco"=> 100.50],
            ]; // array 

            foreach ($produtos as $p){ //uso do foreach com array associativo
                echo  "<tr><td>". $p["nome"] ."</td>" .
                "<td>" . $p["preco"] . "</td> <tr>";

            };
        ?>

    </table> 



</body>
</html>
