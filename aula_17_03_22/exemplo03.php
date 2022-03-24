<?php
    $idade = 18;
    $habilitacao = TRUE;

    /*APROVADO SE IDADE > 18 E HABILITAÇÃO = "TRUE"
    REPROVADO SE IDADE > 18 E HABILITAÇÃO = "FALSE"*/

    if (($idade>=18)and($habilitacao==TRUE)){
        echo "APROVADO";
    }
    else {
        echo "REPROVADO";
    }    
?>