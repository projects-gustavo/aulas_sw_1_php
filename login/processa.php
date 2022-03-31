<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == etecmcm && $senha == 141){
    echo '
        <script type="text/javascript">
            alert ("Okay! tudo certo")
        </script>'    
    ;

    echo '
    <script type="text/javascript">
            window.location = "painel/index.html"
    </script>'
    ;
    }       
    else {
        //FALSO
        //IR PARA A PÁGINA erro.php
        header('Location: index.html');
        exit();
    }
?>
