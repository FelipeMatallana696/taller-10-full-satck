<?php

//inicio
$firstnumber = 0;
$a = 0;


//proceso
echo  "digite el numero a multiplicar: \n";
$firstnumber = readline();

for($a = 0; $a <= 30; $a++ ) {
  $resultado = $firstnumber * $a;
  echo $firstnumber . "x" . $a . "=" . $resultado . "\n";
  
}


?>