<?php 
    $soma = ($valor1 = 4) + 5; // $soma é igual a 9 agora o $valor1 foi configurador como 4
    
    $valor2 = 20;
    $valor3 = 30;

    $soma += 1; //$soma fica com 10 
    $soma += $valor2; //$soma fica com 10+20=30
    $soma *= $valor3; //$SOMA FICA COM 30*30 = 900
    $soma %= 100;

    $saudacao = "Bom ";
    $saudacao .= "Dia "; // configura $saudcao para "Bom dia!"; como em $saudacao = $saudacao . "Dia!";

    echo $saudacao . "Hoje vai ter " . $soma . "% tristeza!";


?>