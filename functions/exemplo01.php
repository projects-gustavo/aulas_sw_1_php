<?php
    /*-----------------------------------------------*/
    echo "<hr>";
    function teste(){
        echo "Gustavo";
    }
    echo "<h1>Função sem retorno e sem parametro</h1>";
    teste();
    echo "<hr>";
    /*-----------------------------------------------*/
    function teste2($a){
        echo $a;
    }
    echo "<h1>Função sem retorno e com parametro</h1>";

    /*A variavel $a tem escopo local, só consegue ser
    acessada pela function*/
    
    teste2('Bom dia');
    echo "<br>";
    teste2('Olá Mundo!');
    echo "<hr>";
    /*-----------------------------------------------*/
    echo "<h1>Função com retorno e sem parametro</h1>";
    function teste3(){
        $b = 'Gustavo';
        return $b;
    }
    $resultado = teste3();
    echo $resultado;
    echo "<hr>";
    /*-----------------------------------------------*/
    echo "<h1>Função com retorno e com parametro</h1>";
    function teste4($x,$y){
        $soma = $x + $y;
        return $soma;
    }
    $num1 = 10;
    $num2 = 20;

    /*Dica: Usar nomes diferentes, exemplo: function está 
    com $x,$y; mas depois é atribuido para $num1,$num2*/

    $result = teste4($num1,$num2);
    echo $result;
    echo "<hr>";
    /*-----------------------------------------------*/
?>