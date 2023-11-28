<?php
//inicio
$number = 0;
$i = 0;


//proceso
  echo "digite el numero de la tabla de multiplicacion que desea saber \n";
  $number = readline ();



//output
while ($i<=30) {
  $result = $number * $i;
  echo "$number x $i = $result \n";
  $i++;
}

?>