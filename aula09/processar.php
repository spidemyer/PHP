<link rel="stylesheet" href="style.css">

<?php 
function exibirCampo($label, $valor) { // Função para exibir um campo de resultado
    echo "<div class='resultado-item'>"; //div para o css
    echo "<span class='resultado-label'>$label:</span> <span>$valor</span>"; // Exibe o rótulo e o valor do campo
    echo "</div>";
}

if (isset($_POST["nome"], $_POST["email"],$_POST["cargo"], $_POST["senha"])){ //verefica os campos
    echo "<div class='resultado-container'>"; //div pra css
    echo "<h3>Dados Recebidos</h3>";
    exibirCampo("Nome", $_POST["nome"]); // Exibe o nome
    exibirCampo("Email",$_POST["email"]); // Exibe o email
    exibirCampo("Cargo", $_POST["cargo"]); // Exibe o cargo
    exibirCampo("Senha", $_POST["senha"]); // Exibe a senha como asteriscos por segurança
    echo "<a href='index.php' class='btn-voltar'>Voltar</a>"; // Link para voltar ao formulário
    echo "</div>";
}
?>