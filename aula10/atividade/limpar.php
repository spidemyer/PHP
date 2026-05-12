<?php
session_start(); //acessa os dados da sessão

// Limpa apenas a lista de usuários da sessão
unset($_SESSION['usuarios']);

// Redireciona de volta para a página inicial
header("Location: index.php");
exit;