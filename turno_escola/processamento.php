<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Dados</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

$sigla = $_POST['sigla'];

switch ($sigla){
    case "M":
        echo "<p>Bom dia!</p>";
        break;
    case "T":
        echo "<p>Boa tarde!</p>";
        break;
    case "N":
        echo "<p>Boa noite!</p>";
        break;
    default:
        echo "<p>Dados incorretos!</p>";
        break;    
}

?>
</body>
</html>
