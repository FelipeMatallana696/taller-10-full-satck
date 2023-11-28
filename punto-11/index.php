<?php

//inicio
$suma = 0;

for($a = 1; $a <= 100; $a = $a + 2) {
 echo $a . "\n";
  $suma += $a;
}

echo  "La suma de todos los numeros impares es: " . $suma;
?>