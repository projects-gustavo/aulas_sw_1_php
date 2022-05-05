<?php
    $num = $_POST['num'];
    $cubo = pow ($num,3);

    /*Exemplo para identificar números ímpares:
    $valor = 11;
    $mod = ($valor % 2);

    echo $mod;*/

    for($cont=$num;$cont<=$cubo;$cont++){
        if($cont % 2 == 1) {
            echo "$cont <br>";
        }
    }      
?>