<?php

$sigla = "SP";
switch ($sigla){      // idade>15 não dá pra fazer com switch
    case "SP":
        echo "Você escolheu São Paulo";
        break;
    case "RJ":
        echo "Você escolheu Rio de Janeiro";
        break;
    case "MG":
        echo "Você escolheu Minas Gerais";
        break;
    default:
        echo "Não encontrei a sigla em minha base de dados!";
        break;    
}

?>