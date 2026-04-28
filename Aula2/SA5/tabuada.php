<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada do 5</title>
    <style>
        body {
            background-color: #FAE6FA;
            text-align: center;
        }
        table {
            background-color: #ce98ce;
            border-color: #380538;
            margin: 0 auto;
            border-collapse: collapse;
            position: center;
        }
    </style>
</head>
<body>
    <?php 
    //tabuada do 5 com for em tabela
    
    echo "<h1> Tabuada do 5 </h1>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = 5 * $i;
        echo "<tr><td> 5 x $i = $resultado </td></tr>";
    }
    echo "</table>";
    
?>

</body>
</html>