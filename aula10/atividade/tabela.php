<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Usuários</title>
</head>
<body class="<?php echo isset($_COOKIE['tema_modo']) ? $_COOKIE['tema_modo'] : 'light-mode'; ?>"> <!-- modo claro e escuro de acordo com a preferencia do usuário !-->
    <div class="resultado-container">
        <h3>Usuários Registados</h3>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['usuarios'])): ?> <!-- Verifica se há usuários registrados -->
                    <?php foreach ($_SESSION['usuarios'] as $user): ?> <!-- Loop para exibir cada usuário -->
                        <tr>
                            <td style="color: <?php echo $user['cor']; ?>; font-weight: bold;"> <!-- cor do nome -->
                                <?php echo $user['nome']; ?>
                            </td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['cargo']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="3" style="text-align:center;">Nenhum dado.</td></tr> <!--aviso se não tiver nenhum dado !-->
                <?php endif; ?>
            </tbody>
        </table>

        <div class="links-container" style="display:flex; justify-content:space-between; margin-top:20px;">
            <a href="index.php" class="btn-voltar">Cadastrar Novo</a> <!--volta pra pagina index pra cadastrar novo usuario !-->
            <a href="limpar.php" class="btn-voltar" style="color:red;">Limpar Tudo</a> <!--limpa os dados da tabela usando a sessão !-->
        </div>
    </div>
</body>
</html>