<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: #FAE6FA;

        }
        main {
            padding: 10px;
            margin-left: auto;
            border: 2px solid purple;
        }

        section {
            padding: 10px;
            margin-left: auto;
            border: 2px solid purple;
        }
    </style>
    
</body>
</html>
    <main>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Ano $i da empresa <br>";
        }
        ?>
    </main>

    <section>
        <?php
        $anos = 10;

        for ($i = 1; $i <= $anos; $i++) {
            echo "Ano $i de operação <br>";
        }
        ?>
    </section>