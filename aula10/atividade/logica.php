<?php
session_start();

// Salva a preferência de cor do nome
if (isset($_POST['cor_tema'])) {
    setcookie("pref_cor", $_POST['cor_tema'], time() + 3600); // 
}

// Salva a preferência de Modo Claro/Escuro 
if (isset($_POST['tema_modo'])) {
    setcookie("tema_modo", $_POST['tema_modo'], time() + 3600);
}

// Salva o usuário na sessão
if (isset($_POST['nome'], $_POST['email'], $_POST['cargo'])) {
    $_SESSION['usuarios'][] = [
        'nome'  => htmlspecialchars($_POST['nome']), //htmlspecialchars para manter a segurança 
        'email' => htmlspecialchars($_POST['email']),
        'cargo' => htmlspecialchars($_POST['cargo']),
        'cor'   => $_POST['cor_tema'] 
    ];
}

header("Location: tabela.php"); // Redireciona para a tabela após processar os dados
?>