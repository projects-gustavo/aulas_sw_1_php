<?php
    $num = $_POST['num'];
    $resultado = 1;

    for($cont=$num;$cont>=1;$cont--){
        $resultado *= $cont;
        echo "contador ==> $cont <br>";
        echo "resultado ==> $resultado <br>";
    }
    echo "O resultado final é: $resultado";
?>