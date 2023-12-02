<?php
// 1 . funcion para obtener un numero
function getNumber() {
  echo "Ingrese un numero: \n";
  return readline();
}

// 2. llamar funcion para mostrar menu y retornar respuesta
function showMenu() {
  echo "Seleccione la operacion que desea realizar: \n";
  echo "1. sumar \n";
  echo "2. restar \n";
  echo "3. multiplicar \n";
  echo "4. dividir \n";
  return readline();
}

// 3. funcion que realice la operacion correcta.
function operate($x, $y, $option) {
  switch($option) {
    case 1:
      return sum($x, $y);
    case 2:
      return rest($x, $y);
    case 3:
      return multiply($x, $y);
    case 4:
      return divide($x, $y);
    default:
      echo "opcion no valida \n";
      return 0;
  }
  
}

// 4. funciones por cada operacion
function sum($x, $y) {
  return $x + $y;
}

function rest($x, $y) {
  return $x - $y;
}

function multiply($x, $y) {
  return $x * $y;
}

function divide($x, $y) {
  return $x / $y;
}
?>