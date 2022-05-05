<?php
    $num = $_POST['num'];
    
    for($cont=1;$cont<=10;$cont++){
      echo "$num * $cont = " . ($num * $cont) . "<br>";
    }
?>