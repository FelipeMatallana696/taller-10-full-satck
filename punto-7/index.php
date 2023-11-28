<?php
// inicio
$firstnumber = 0;
$secondnumber = 0;
$operationtype = "";
$result = 0;


//proceso
echo "digite que tipo de operacion que desea realizar \n ";
echo "+ -> para suma \n - -> para resta \n * -> para multiplicacion \n / -> para division \n";
$operationtype = readline();

echo "digite el primer valor \n ";
$firstnumber = readline();

echo "digite el segundo valor \n ";
$secondnumber = readline();

switch($operationtype) {
  case "+":
    $result = $firstnumber + $secondnumber;
  break;
  case "-":
    $result = $firstnumber - $secondnumber;
  break;
  case "*":
    $result = $firstnumber * $secondnumber;
  break;
  case "/":
    $result = $firstnumber / $secondnumber;
  break;
  default:
    echo "la operacion que seleccionaste no es valida \n ";
}

//output
echo "el resultado de la operacion es : " . $result;

?>