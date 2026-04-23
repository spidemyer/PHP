<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autonomia Assistida</title>
</head>
<body>
    <?php 
        /*apresentação da empresa*/
        echo "<h1> Empresa Love Yourself <h1>";
        echo "<h2> Seja muito bem-vindo a nossa empresa! </h2>";

        //botão interativo
        echo "<p> Você compra maquiagem? </p>";
        echo "<button> sim </button>";
        echo "<button> não </button>";
    ?>
    <br>
        <!-- campo para preencher -->
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui" required>

</body>
</html>