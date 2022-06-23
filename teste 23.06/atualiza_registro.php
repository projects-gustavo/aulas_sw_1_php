<?php
    include 'conecta.php';
    echo "<br><br>";

    $sql = "UPDATE alunos SET curso='Engenharia' WHERE id=2";

    if (mysqli_query($conexao, $sql)) {
        echo "Registro atualizado com successo";
    } 
    else {
        echo "Erro na atualização do registro: " . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);

?>
