<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #6a5acd;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #6a5acd;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #483d8b; 
            transform: translateY(-2px); 
        }

        input[type="submit"]:active {
            transform: translateY(0);
        }
        .dados-section {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <form method="POST" action="processar.php">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome"><br>
        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail"><br>
        <label>Cargo: </label>
        <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo"><br>
        <label>Senha: </label>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>