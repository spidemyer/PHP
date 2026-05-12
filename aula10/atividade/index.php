<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo isset($_COOKIE['tema_modo']) ? $_COOKIE['tema_modo'] : 'light-mode'; ?>">
    <div class="form-container">
        <h2>Novo Usuário</h2>
        <form method="POST" action="logica.php">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            
            <label>E-mail:</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            
            <label>Cargo:</label>
            <input type="text" name="cargo" placeholder="Ex: Desenvolvedor" required>
            
            <label>Cor do Nome:</label>
            <select name="cor_tema"> <!-- Cookie !-->
                <option value="#6a5acd">Roxo</option>
                <option value="#2ecc71">Verde</option>
                <option value="#82b5f0">Azul</option>
                <option value="#e67e22">Laranja</option>
            </select>

            <label>Modo de Visualização:</label>
            <select name="tema_modo"> <!-- Cookie dnv -->
                <option value="light-mode">Modo Claro</option>
                <option value="dark-mode">Modo Escuro</option>
            </select>

            <input type="submit" value="Cadastrar e Ver Tabela">
        </form>
        <div class="dados-section">
            <a href="tabela.php">Ver lista sem cadastrar</a>
        </div>
    </div>
</body>
</html>