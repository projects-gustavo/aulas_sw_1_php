<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Processar Valores</title>
    </head>
    <body>
    <?php
    $name = $_POST['name'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $result = ($num1 + $num2 + $num3)/3;
    
    echo "<hr class='top'>";
    echo "<p>A sua média é $result</p>";
    echo "<hr>";
    ?>
</body>
</html>
