<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Valida</title>
</head>
<body>
    <?php
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $user = 'GUSTAVO';
        $pass = '1234';

        if(($usuario == $user) && ($senha == $pass)){
            session_start();
            $_SESSION['username'] = $usuario;
            $_SESSION['logado'] = 1;
            header("Location: restrita.php");
        } else{
            echo "Dados Incorretos";
            echo "<br>";
            echo "<a href='logout.php'>TENTAR NOVAMENTE</a>";
        }
    ?>
</body>
</html>