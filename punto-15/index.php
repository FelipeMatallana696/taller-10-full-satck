<?php
include "./optionfunction.php";

//Inicio
$firstNumber = 0;
$secondNumber = 0;
$option = "";

// proceso
// 1. llamar una funcion para poder obtener un numero

$firstNumber = getNumber();
$secondNumber = getNumber();

// 2. llamar una funcion para obtener el menu y obtener la opcion del usuario
$option = showMenu();

// 3.  llamar funcion que seleccione la operacion correcta

$result = operate($firstNumber, $secondNumber, $option);

// 4. mostrar el resultado. 
echo "El resultado es: ".$result;

?>