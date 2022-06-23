<?php
    include 'conecta.php';
    echo "<br><br>";

    $sql = "INSERT INTO alunos (nome, curso, idade)
    VALUES ('OUTRO REGISTRO', 'MEDICINA', '52')";

    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro criado com sucesso";
    } 
    else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);

?>