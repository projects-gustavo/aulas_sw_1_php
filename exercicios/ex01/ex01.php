<?php
    $num = $_POST['num'];
    $cubo = pow ($num,3);
    
    for($cont=$num;$cont<=$cubo;$cont++){
        echo "$cont <br>";
    }

?>