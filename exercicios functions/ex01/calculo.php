<?php
  $num = $_POST['num'];
  $temp = $_POST['temp'];
  
  if($num==1) {
        echo "A temperatura em farenheit é: ".function1($temp)." °F";
  } elseif($num==2) {
        echo "A temperatura em celsius é: ".function2($temp)." °C";
  } else {
        echo "O número na qual você digitou, está incorreto!";
  }
  
  function function1($temperatura){
      return ($temperatura*9/5)+32;
  }
  function function2($temperatura){
      return ($temperatura-32)*5/9;
  }
?>