<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restrita</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['logado'] != 1){
            header("Location: index.html");
        }    
        echo "<p>Você está em uma página restrita!<p>";
        echo "<br>";
        echo "<a href='logout.php'>SAIR</a>";
    ?>
</body>
</html>
