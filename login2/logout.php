<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logout</title>
</head>
<body>
    <?php
        session_start();
        unset($_SESSION);
        session_destroy();
        header("Location: index.html");
    ?>  
</body>
</html>