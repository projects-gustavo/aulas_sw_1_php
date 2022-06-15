<?php
    $num = $_POST['num'];
                
    if(!empty($num)){
        function piramide($num){
            for($i = 0; $i < $num; $i++){
                for($contador = 1; $contador <= $i+1; $contador++){
                    echo "$contador ";
                }
                echo "<br>";
            }
        }
        piramide($num);                    
    }
?>
