<?php
    $sigla = $_POST['sigla'];
    
    for($i = 0; $i <= 10; $i++){
      echo "{$sigla} * {$i} = " . ($sigla * $i) . "<br>";
    }
?>