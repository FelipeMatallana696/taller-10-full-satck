<?php

// inicio

$numberArray = array (3,5,7,9,2);
$suma = 0;

//proceso
foreach ($numberArray as $num) {
  $suma += $num;
}

//output
echo "la suma total del arreglo es: \n" . $suma;

?>